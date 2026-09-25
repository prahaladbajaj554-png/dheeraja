<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class AdminLog extends Model
{
    protected string $table = 'admin_logs';

    public static function log(int $adminId, string $action, string $targetEntity, ?int $targetId = null, array $details = []): void
    {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
        $ua = substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 255);

        $sql = "INSERT INTO `admin_logs` (`admin_id`, `action`, `target_entity`, `target_id`, `ip_address`, `user_agent`, `details_json`) 
                VALUES (:admin_id, :action, :target_entity, :target_id, :ip, :ua, :details)";
        
        Database::query($sql, [
            'admin_id'      => $adminId,
            'action'        => $action,
            'target_entity' => $targetEntity,
            'target_id'     => $targetId,
            'ip'            => $ip,
            'ua'            => $ua,
            'details'       => json_encode($details)
        ]);
    }

    public static function getRecent(int $limit = 50): array
    {
        $sql = "SELECT al.*, u.email as admin_email, p.first_name, p.last_name
                FROM `admin_logs` al
                JOIN `users` u ON u.id = al.admin_id
                LEFT JOIN `profiles` p ON p.user_id = u.id
                ORDER BY al.id DESC
                LIMIT {$limit}";
        return Database::fetchAll($sql);
    }
}
