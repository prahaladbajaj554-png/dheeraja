<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Database;

class WhatsAppCommunity extends Model
{
    protected string $table = 'whatsapp_communities';

    public static function getActive(): array
    {
        return Database::fetchAll("SELECT * FROM `whatsapp_communities` WHERE `is_active` = 1 ORDER BY `member_count` DESC");
    }
}
