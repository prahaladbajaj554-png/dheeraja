<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class User extends Model
{
    protected string $table = 'users';

    public static function findWithProfile(int $id): ?array
    {
        $sql = "SELECT u.*, p.first_name, p.last_name, p.gender, p.dob, p.marital_status, p.mother_tongue, 
                       p.height_cm, p.weight_kg, p.current_city, p.current_state, p.about_me,
                       ec.highest_education, ec.occupation, ec.annual_income_inr, ec.work_city,
                       fd.family_type, fd.family_values, fd.family_status,
                       ad.religion, ad.caste, ad.sub_caste, ad.gotra, ad.rashi, ad.nakshatra, ad.manglik,
                       sp.title as plan_title, sp.badge_name as plan_badge, us.expires_at as plan_expires_at, us.is_free_grant
                FROM `users` u
                LEFT JOIN `profiles` p ON p.user_id = u.id
                LEFT JOIN `education_careers` ec ON ec.user_id = u.id
                LEFT JOIN `family_details` fd ON fd.user_id = u.id
                LEFT JOIN `astrology_details` ad ON ad.user_id = u.id
                LEFT JOIN `user_subscriptions` us ON us.user_id = u.id AND us.status = 'active' AND us.expires_at > NOW()
                LEFT JOIN `subscription_plans` sp ON sp.id = us.plan_id
                WHERE u.id = :id
                ORDER BY us.id DESC
                LIMIT 1";
        return Database::fetchOne($sql, ['id' => $id]);
    }

    public static function findByMatrimonyId(string $matrimonyId): ?array
    {
        return Database::fetchOne("SELECT * FROM `users` WHERE `matrimony_id` = :mid LIMIT 1", ['mid' => $matrimonyId]);
    }

    public static function findByEmailOrPhone(string $identifier): ?array
    {
        $sql = "SELECT * FROM `users` WHERE `email` = :email OR `phone` = :phone LIMIT 1";
        return Database::fetchOne($sql, ['email' => $identifier, 'phone' => $identifier]);
    }

    public static function getActiveSubscription(int $userId): ?array
    {
        $sql = "SELECT us.*, sp.plan_code, sp.title, sp.badge_name, sp.contact_views_limit, sp.direct_messages_limit, 
                       sp.priority_search_boost, sp.kundali_matching_unlimited
                FROM `user_subscriptions` us
                JOIN `subscription_plans` sp ON sp.id = us.plan_id
                WHERE us.user_id = :uid AND us.status = 'active' AND us.expires_at > NOW()
                ORDER BY us.id DESC
                LIMIT 1";
        return Database::fetchOne($sql, ['uid' => $userId]);
    }
}
