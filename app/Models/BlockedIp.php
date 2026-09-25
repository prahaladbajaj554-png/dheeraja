<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class BlockedIp extends Model
{
    protected string $table = 'blocked_ips';

    public static function block(string $ip, string $reason, ?int $adminId = null, ?int $hours = 24): bool
    {
        $untilSql = $hours ? "DATE_ADD(NOW(), INTERVAL {$hours} HOUR)" : "NULL";
        $sql = "INSERT INTO `blocked_ips` (`ip_address`, `reason`, `blocked_by`, `blocked_until`) 
                VALUES (:ip, :reason, :admin_id, {$untilSql})
                ON DUPLICATE KEY UPDATE `reason` = :reason, `blocked_until` = {$untilSql}";
        
        Database::query($sql, [
            'ip'       => $ip,
            'reason'   => $reason,
            'admin_id' => $adminId
        ]);

        if ($adminId) {
            AdminLog::log($adminId, 'BLOCK_IP', 'blocked_ips', null, ['ip' => $ip, 'reason' => $reason]);
        }

        return true;
    }

    public static function unblock(int $id, ?int $adminId = null): bool
    {
        $rec = self::find($id);
        if (!$rec) return false;

        self::delete($id);

        if ($adminId) {
            AdminLog::log($adminId, 'UNBLOCK_IP', 'blocked_ips', $id, ['ip' => $rec['ip_address']]);
        }

        return true;
    }
}
