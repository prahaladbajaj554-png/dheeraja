<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\SubscriptionPlan;
use App\Models\AdminLog;

class SubscriptionsController extends Controller
{
    public function index(Request $request)
    {
        $plans = Database::fetchAll("SELECT sp.*, COUNT(us.id) as subscriber_count 
                                     FROM `subscription_plans` sp 
                                     LEFT JOIN `user_subscriptions` us ON us.plan_id = sp.id AND us.status = 'active' AND us.expires_at > NOW()
                                     GROUP BY sp.id 
                                     ORDER BY sp.price_inr ASC");

        $this->view('admin/subscriptions/index', [
            'page_title' => 'Subscription Packages & Monetization',
            'plans'      => $plans
        ]);
    }

    public function add(Request $request)
    {
        $this->view('admin/subscriptions/add', [
            'page_title' => 'Create New Subscription Package'
        ]);
    }

    public function create(Request $request)
    {
        $code = strtoupper(trim($request->post('plan_code', '')));
        $title = trim($request->post('title', ''));
        $price = (float)$request->post('price_inr', 0);
        $duration = (int)$request->post('duration_days', 30);
        $contactViews = (int)$request->post('contact_views_limit', 10);
        $messages = (int)$request->post('direct_messages_limit', 50);
        $badge = trim($request->post('badge_name', 'Member'));
        $searchBoost = (int)$request->post('priority_search_boost', 0);
        $kundali = (int)$request->post('kundali_matching_unlimited', 0);

        if (empty($code) || empty($title)) {
            $this->flash('error', 'Plan code and title are required.');
            Response::redirect('/admin/subscriptions/add');
        }

        Database::query("INSERT INTO `subscription_plans` (`plan_code`, `title`, `price_inr`, `duration_days`, `contact_views_limit`, `direct_messages_limit`, `priority_search_boost`, `kundali_matching_unlimited`, `badge_name`, `is_active`) VALUES (:code, :title, :price, :dur, :cv, :msg, :sb, :km, :badge, 1)", [
            'code'  => $code,
            'title' => $title,
            'price' => $price,
            'dur'   => $duration,
            'cv'    => $contactViews,
            'msg'   => $messages,
            'sb'    => $searchBoost,
            'km'    => $kundali,
            'badge' => $badge
        ]);

        $newId = Database::lastInsertId();
        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'CREATE_PLAN', 'subscription_plans', $newId, ['code' => $code, 'title' => $title]);
        $this->flash('success', "Plan [{$title}] created successfully!");
        Response::redirect('/admin/subscriptions');
    }

    public function edit(Request $request)
    {
        $id = (int)$request->param('id');
        $plan = SubscriptionPlan::find($id);

        if (!$plan) {
            $this->flash('error', 'Plan not found.');
            Response::redirect('/admin/subscriptions');
        }

        $this->view('admin/subscriptions/edit', [
            'page_title' => "Edit Plan: {$plan['title']}",
            'plan'       => $plan
        ]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->param('id');
        $plan = SubscriptionPlan::find($id);

        if (!$plan) {
            $this->flash('error', 'Plan not found.');
            Response::redirect('/admin/subscriptions');
        }

        Database::query("UPDATE `subscription_plans` SET 
            `title` = :title, 
            `price_inr` = :price, 
            `duration_days` = :dur, 
            `contact_views_limit` = :cv, 
            `direct_messages_limit` = :msg, 
            `priority_search_boost` = :sb, 
            `kundali_matching_unlimited` = :km, 
            `badge_name` = :badge,
            `is_active` = :active 
            WHERE `id` = :id", [
                'title'  => trim($request->post('title', $plan['title'])),
                'price'  => (float)$request->post('price_inr', $plan['price_inr']),
                'dur'    => (int)$request->post('duration_days', $plan['duration_days']),
                'cv'     => (int)$request->post('contact_views_limit', $plan['contact_views_limit']),
                'msg'    => (int)$request->post('direct_messages_limit', $plan['direct_messages_limit']),
                'sb'     => (int)$request->post('priority_search_boost', 0),
                'km'     => (int)$request->post('kundali_matching_unlimited', 0),
                'badge'  => trim($request->post('badge_name', $plan['badge_name'])),
                'active' => (int)$request->post('is_active', 1),
                'id'     => $id
        ]);

        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'UPDATE_PLAN', 'subscription_plans', $id, ['title' => $plan['title']]);
        $this->flash('success', "Plan [{$plan['title']}] updated successfully.");
        Response::redirect('/admin/subscriptions');
    }

    public function grantLogs(Request $request)
    {
        $logs = Database::fetchAll("SELECT us.*, u.matrimony_id, p.first_name, p.last_name, sp.title as plan_title, admin_u.email as admin_email
                                   FROM `user_subscriptions` us
                                   JOIN `users` u ON u.id = us.user_id
                                   JOIN `profiles` p ON p.user_id = u.id
                                   JOIN `subscription_plans` sp ON sp.id = us.plan_id
                                   LEFT JOIN `users` admin_u ON admin_u.id = us.granted_by_admin_id
                                   WHERE us.is_free_grant = 1
                                   ORDER BY us.id DESC
                                   LIMIT 50");

        $this->view('admin/subscriptions/grant-logs', [
            'page_title' => 'Manual VIP & Free Plan Grant Ledger',
            'logs'       => $logs
        ]);
    }

    public function payments(Request $request)
    {
        $status = $request->query('status', '');
        $sql = "SELECT p.*, u.matrimony_id, u.email as user_email, u.phone as user_phone, 
                       pr.first_name, pr.last_name, sp.title as plan_title
                FROM `payments` p
                LEFT JOIN `users` u ON u.id = p.user_id
                LEFT JOIN `profiles` pr ON pr.user_id = u.id
                LEFT JOIN `subscription_plans` sp ON sp.id = p.plan_id";
        
        $params = [];
        if (!empty($status)) {
            $sql .= " WHERE p.status = :st";
            $params['st'] = $status;
        }
        $sql .= " ORDER BY p.id DESC LIMIT 100";

        $payments = Database::fetchAll($sql, $params);

        // Revenue Stats
        $stats = Database::fetch("SELECT 
            COUNT(id) as total_count,
            COALESCE(SUM(CASE WHEN status = 'successful' THEN amount_inr ELSE 0 END), 0) as total_revenue,
            COALESCE(SUM(CASE WHEN status = 'successful' AND DATE(created_at) = CURDATE() THEN amount_inr ELSE 0 END), 0) as today_revenue,
            COUNT(CASE WHEN status = 'pending' THEN 1 END) as pending_count
            FROM `payments`");

        $this->view('admin/payments/index', [
            'page_title' => 'ऑनलाइन पेमेंट्स एवं वित्तीय लेजर (Payment Transactions)',
            'payments'   => $payments,
            'stats'      => $stats,
            'status'     => $status
        ]);
    }

    public function approveUtr(Request $request, array $params = [])
    {
        $id = (int)($params['id'] ?? $request->query('id', 0));
        $payment = Database::fetch("SELECT * FROM `payments` WHERE id = :id", ['id' => $id]);
        
        if ($payment) {
            Database::query("UPDATE `payments` SET `status` = 'successful' WHERE id = :id", ['id' => $id]);
            
            $plan = Database::fetch("SELECT duration_days, title FROM `subscription_plans` WHERE id = :pid", ['pid' => $payment['plan_id']]);
            $days = (int)($plan['duration_days'] ?? 90);
            $expiresAt = date('Y-m-d H:i:s', strtotime("+{$days} days"));

            Database::query("INSERT INTO `user_subscriptions` 
                (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `grant_notes`, `status`, `created_at`)
                VALUES (:uid, :pid, NOW(), :exp, 0, :notes, 'active', NOW())", [
                    'uid'   => $payment['user_id'],
                    'pid'   => $payment['plan_id'],
                    'exp'   => $expiresAt,
                    'notes' => "Admin approved payment #" . $payment['id']
                ]
            );

            Database::query("UPDATE `users` SET `is_vip` = 1 WHERE `id` = :uid", ['uid' => $payment['user_id']]);
            $this->flash('success', "Payment #{$id} approved and subscription granted successfully.");
        }

        Response::redirect('/admin/payments');
    }
}
