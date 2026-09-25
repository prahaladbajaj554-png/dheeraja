<?php
namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;
use App\Models\Promotion;
use App\Models\AdminLog;

class PromotionsController extends Controller
{
    public function index(Request $request)
    {
        $promotions = Database::fetchAll("SELECT * FROM `promotions` ORDER BY `id` DESC");
        $launchEnabled = setting('launch_free_vip_enabled', '1');
        $launchDays = setting('launch_free_vip_days', '90');

        $this->view('admin/promotions/index', [
            'page_title'    => 'Promotional Engine & Launch VIP Control',
            'promotions'    => $promotions,
            'launchEnabled' => $launchEnabled,
            'launchDays'    => $launchDays
        ]);
    }

    public function updateLaunchPromo(Request $request)
    {
        $enabled = $request->post('launch_free_vip_enabled') ? '1' : '0';
        $days = (int)$request->post('launch_free_vip_days', 90);

        Database::query("UPDATE `app_settings` SET `setting_value` = :val WHERE `setting_key` = 'launch_free_vip_enabled'", ['val' => $enabled]);
        Database::query("UPDATE `app_settings` SET `setting_value` = :val WHERE `setting_key` = 'launch_free_vip_days'", ['val' => (string)$days]);

        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'UPDATE_LAUNCH_PROMO', 'app_settings', null, [
            'enabled' => $enabled,
            'days'    => $days
        ]);

        $this->flash('success', "Launch Promotion settings updated: " . ($enabled === '1' ? "ACTIVE ({$days} Days VIP Free)" : "DISABLED"));
        Response::redirect('/admin/promotions');
    }

    public function add(Request $request)
    {
        $this->view('admin/promotions/add', [
            'page_title' => 'Create Promotional Campaign / Banner'
        ]);
    }

    public function create(Request $request)
    {
        $title = trim($request->post('title', ''));
        $badge = trim($request->post('badge_text', 'LAUNCH SPECIAL'));
        $desc = trim($request->post('description', ''));
        $coupon = trim($request->post('coupon_code', ''));
        $link = trim($request->post('action_link', '/plans'));

        if (empty($title)) {
            $this->flash('error', 'Promotion title is required.');
            Response::redirect('/admin/promotions/add');
        }

        Database::query("INSERT INTO `promotions` (`title`, `badge_text`, `description`, `coupon_code`, `action_link`, `is_active`) VALUES (:t, :b, :d, :c, :l, 1)", [
            't' => $title,
            'b' => $badge,
            'd' => $desc,
            'c' => $coupon,
            'l' => $link
        ]);

        AdminLog::log(Session::getAdmin()['id'] ?? 1, 'CREATE_PROMOTION', 'promotions', Database::lastInsertId(), ['title' => $title]);
        $this->flash('success', "Promotion [{$title}] published successfully.");
        Response::redirect('/admin/promotions');
    }
}
