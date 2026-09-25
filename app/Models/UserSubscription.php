<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class UserSubscription extends Model
{
    protected string $table = 'user_subscriptions';

    public static function grantPlan(int $userId, int $planId, int $durationDays, bool $isFree = true, ?int $adminId = null, string $notes = ''): int
    {
        // 1. Deactivate any existing active subscriptions
        Database::query("UPDATE `user_subscriptions` SET `status` = 'expired' WHERE `user_id` = :uid AND `status` = 'active'", ['uid' => $userId]);

        // 2. Insert new granted subscription
        $sql = "INSERT INTO `user_subscriptions` 
                (`user_id`, `plan_id`, `starts_at`, `expires_at`, `is_free_grant`, `granted_by_admin_id`, `grant_notes`, `status`) 
                VALUES (:uid, :pid, NOW(), DATE_ADD(NOW(), INTERVAL :days DAY), :is_free, :admin_id, :notes, 'active')";
        
        Database::query($sql, [
            'uid'      => $userId,
            'pid'      => $planId,
            'days'     => $durationDays,
            'is_free'  => $isFree ? 1 : 0,
            'admin_id' => $adminId,
            'notes'    => $notes
        ]);

        $subId = (int)Database::lastInsertId();

        // 3. Mark user as VIP in users table
        Database::query("UPDATE `users` SET `is_vip` = 1 WHERE `id` = :uid", ['uid' => $userId]);

        // 4. Log admin audit if performed by admin
        if ($adminId) {
            AdminLog::log($adminId, 'GRANT_VIP', 'user_subscriptions', $subId, [
                'user_id'       => $userId,
                'plan_id'       => $planId,
                'duration_days' => $durationDays,
                'is_free_grant' => $isFree,
                'notes'         => $notes
            ]);
        }

        return $subId;
    }

    public static function revokePlan(int $subId, ?int $adminId = null, string $reason = ''): bool
    {
        $sub = self::find($subId);
        if (!$sub) return false;

        Database::query("UPDATE `user_subscriptions` SET `status` = 'revoked', `grant_notes` = CONCAT(IFNULL(`grant_notes`, ''), ' | Revoked: ', :reason) WHERE `id` = :id", [
            'id'     => $subId,
            'reason' => $reason
        ]);

        Database::query("UPDATE `users` SET `is_vip` = 0 WHERE `id` = :uid", ['uid' => $sub['user_id']]);

        if ($adminId) {
            AdminLog::log($adminId, 'REVOKE_VIP', 'user_subscriptions', $subId, [
                'user_id' => $sub['user_id'],
                'reason'  => $reason
            ]);
        }

        return true;
    }
}
