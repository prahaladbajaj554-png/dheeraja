<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\AdminLog;
use App\Models\BlockedIp;

class SecurityController extends Controller
{
    public function auditLogs(Request $request)
    {
        $action = trim($request->get('action', ''));
        $search = trim($request->get('search', ''));
        $page = max(1, (int)$request->get('page', 1));
        $limit = 25;

        $where = ["1=1"];
        $params = [];

        if (!empty($action)) {
            $where[] = "al.action = :act";
            $params['act'] = $action;
        }

        if (!empty($search)) {
            $where[] = "(al.ip_address LIKE :s OR al.details_json LIKE :s OR u.email LIKE :s)";
            $params['s'] = "%{$search}%";
        }

        $whereSql = implode(' AND ', $where);
        $total = (int)Database::fetchOne("SELECT COUNT(*) as cnt FROM `admin_logs` al JOIN `users` u ON u.id = al.admin_id WHERE {$whereSql}", $params)['cnt'];
        $totalPages = (int)ceil($total / $limit);
        $offset = ($page - 1) * $limit;

        $sql = "SELECT al.*, u.email as admin_email, p.first_name, p.last_name
                FROM `admin_logs` al
                JOIN `users` u ON u.id = al.admin_id
                LEFT JOIN `profiles` p ON p.user_id = u.id
                WHERE {$whereSql}
                ORDER BY al.id DESC
                LIMIT {$limit} OFFSET {$offset}";

        $logs = Database::fetchAll($sql, $params);

        $actions = Database::fetchAll("SELECT DISTINCT action FROM `admin_logs` ORDER BY action ASC");

        $this->view('admin/security/audit-logs', [
            'page_title' => 'Master Security Audit Trail',
            'logs'       => $logs,
            'actions'    => array_column($actions, 'action'),
            'selectedAction' => $action,
            'search'     => $search,
            'total'      => $total,
            'page'       => $page,
            'totalPages' => $totalPages
        ]);
    }

    public function ipFirewall(Request $request)
    {
        $blockedIps = Database::fetchAll("SELECT b.*, u.email as blocked_by_email 
                                         FROM `blocked_ips` b 
                                         LEFT JOIN `users` u ON u.id = b.blocked_by 
                                         ORDER BY b.id DESC");

        $timeoutMinutes = setting('admin_session_timeout_minutes', '15');

        $this->view('admin/security/ip-firewall', [
            'page_title'     => 'Firewall & Anti-Hacking Security Operations',
            'blockedIps'     => $blockedIps,
            'timeoutMinutes' => $timeoutMinutes
        ]);
    }

    public function blockIp(Request $request)
    {
        $ip = trim($request->post('ip_address', ''));
        $reason = trim($request->post('reason', 'Manual block by Master Admin'));
        $hours = (int)$request->post('duration_hours', 24);

        if (!empty($ip) && filter_var($ip, FILTER_VALIDATE_IP)) {
            $admin = Session::getAdmin();
            BlockedIp::block($ip, $reason, $admin['id'] ?? 1, $hours ?: null);
            $this->flash('success', "IP address [{$ip}] has been blocked by firewall.");
        } else {
            $this->flash('error', "Invalid IP address provided.");
        }

        Response::redirect('/admin/security/firewall');
    }

    public function unblockIp(Request $request)
    {
        $id = (int)$request->param('id');
        $admin = Session::getAdmin();
        BlockedIp::unblock($id, $admin['id'] ?? 1);

        $this->flash('success', "IP address unblocked successfully.");
        Response::redirect('/admin/security/firewall');
    }

    public function updateSecurityConfig(Request $request)
    {
        $timeout = max(5, min(120, (int)$request->post('admin_session_timeout_minutes', 15)));

        Database::query("UPDATE `app_settings` SET `setting_value` = :val WHERE `setting_key` = 'admin_session_timeout_minutes'", [
            'val' => (string)$timeout
        ]);

        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'UPDATE_SECURITY_CONFIG', 'app_settings', null, [
            'session_timeout' => $timeout
        ]);

        $this->flash('success', "Security session timeout set to {$timeout} minutes.");
        Response::redirect('/admin/security/firewall');
    }
}
