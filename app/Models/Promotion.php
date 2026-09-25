<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class Promotion extends Model
{
    protected string $table = 'promotions';

    public static function getActivePromotions(): array
    {
        $sql = "SELECT * FROM `promotions` 
                WHERE `is_active` = 1 
                AND (`starts_at` IS NULL OR `starts_at` <= NOW())
                AND (`expires_at` IS NULL OR `expires_at` >= NOW())
                ORDER BY `id` DESC";
        return Database::fetchAll($sql);
    }
}
