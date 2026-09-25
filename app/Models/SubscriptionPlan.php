<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class SubscriptionPlan extends Model
{
    protected string $table = 'subscription_plans';

    public static function getActivePlans(): array
    {
        return Database::fetchAll("SELECT * FROM `subscription_plans` WHERE `is_active` = 1 ORDER BY `price_inr` ASC");
    }

    public static function getVipProPlan(): ?array
    {
        return Database::fetchOne("SELECT * FROM `subscription_plans` WHERE `plan_code` = 'VIP_PRO' LIMIT 1");
    }
}
