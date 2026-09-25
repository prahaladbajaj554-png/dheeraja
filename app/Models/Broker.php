<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class Broker extends Model
{
    protected string $table = 'brokers';

    public static function allWithStats(): array
    {
        $sql = "SELECT b.*, 
                       COUNT(DISTINCT bc.user_id) as mapped_clients_count,
                       COALESCE(SUM(bcon.amount_inr), 0) as total_payouts_made
                FROM `brokers` b
                LEFT JOIN `broker_clients` bc ON bc.broker_id = b.id
                LEFT JOIN `broker_contributions` bcon ON bcon.broker_id = b.id AND bcon.payout_status = 'paid'
                GROUP BY b.id
                ORDER BY b.id DESC";
        return Database::fetchAll($sql);
    }

    public static function findWithDetails(int $id): ?array
    {
        return Database::fetchOne("SELECT * FROM `brokers` WHERE `id` = :id LIMIT 1", ['id' => $id]);
    }

    public static function getClients(int $brokerId): array
    {
        $sql = "SELECT bc.*, u.matrimony_id, u.email, u.phone, u.status as user_status,
                       p.first_name, p.last_name, p.gender, p.dob, p.current_city,
                       ec.occupation, ec.annual_income_inr,
                       ad.caste, ad.gotra
                FROM `broker_clients` bc
                JOIN `users` u ON u.id = bc.user_id
                JOIN `profiles` p ON p.user_id = u.id
                LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                WHERE bc.broker_id = :bid
                ORDER BY bc.id DESC";
        return Database::fetchAll($sql, ['bid' => $brokerId]);
    }

    public static function getContributions(int $brokerId): array
    {
        $sql = "SELECT bcon.*, u.matrimony_id, p.first_name, p.last_name
                FROM `broker_contributions` bcon
                LEFT JOIN `users` u ON u.id = bcon.user_id
                LEFT JOIN `profiles` p ON p.user_id = u.id
                WHERE bcon.broker_id = :bid
                ORDER BY bcon.id DESC";
        return Database::fetchAll($sql, ['bid' => $brokerId]);
    }
}
