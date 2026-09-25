<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class KycDocument extends Model
{
    protected string $table = 'kyc_documents';

    public static function getPending(): array
    {
        $sql = "SELECT kd.*, u.matrimony_id, u.email, u.phone, p.first_name, p.last_name, p.dob, p.gender
                FROM `kyc_documents` kd
                JOIN `users` u ON u.id = kd.user_id
                JOIN `profiles` p ON p.user_id = u.id
                WHERE kd.status = 'pending'
                ORDER BY kd.id ASC";
        return Database::fetchAll($sql);
    }

    public static function approve(int $docId, int $adminId): bool
    {
        $doc = self::find($docId);
        if (!$doc) return false;

        Database::query("UPDATE `kyc_documents` SET `status` = 'approved', `verified_by` = :admin_id, `verified_at` = NOW() WHERE `id` = :id", [
            'admin_id' => $adminId,
            'id'       => $docId
        ]);

        Database::query("UPDATE `users` SET `is_kyc_verified` = 1 WHERE `id` = :uid", [
            'uid' => $doc['user_id']
        ]);

        AdminLog::log($adminId, 'APPROVE_KYC', 'kyc_documents', $docId, [
            'user_id'  => $doc['user_id'],
            'doc_type' => $doc['doc_type']
        ]);

        return true;
    }

    public static function reject(int $docId, int $adminId, string $reason): bool
    {
        $doc = self::find($docId);
        if (!$doc) return false;

        Database::query("UPDATE `kyc_documents` SET `status` = 'rejected', `rejection_reason` = :reason, `verified_by` = :admin_id, `verified_at` = NOW() WHERE `id` = :id", [
            'reason'   => $reason,
            'admin_id' => $adminId,
            'id'       => $docId
        ]);

        Database::query("UPDATE `users` SET `is_kyc_verified` = 0 WHERE `id` = :uid", [
            'uid' => $doc['user_id']
        ]);

        AdminLog::log($adminId, 'REJECT_KYC', 'kyc_documents', $docId, [
            'user_id'  => $doc['user_id'],
            'doc_type' => $doc['doc_type'],
            'reason'   => $reason
        ]);

        return true;
    }
}
