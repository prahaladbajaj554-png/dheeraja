<?php
namespace App\Middlewares;

use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Core\Database;

class SessionTimeoutMiddleware
{
    public function handle(Request $request): bool
    {
        Session::start();

        if (!Session::isAdminLoggedIn()) {
            return true;
        }

        // Exclude the lockscreen itself to prevent redirect loops
        if ($request->uri() === '/admin/lockscreen') {
            return true;
        }

        // Get configured timeout in minutes
        $timeoutSetting = Database::fetchOne("SELECT setting_value FROM `app_settings` WHERE `setting_key` = 'admin_session_timeout_minutes'");
        $timeoutMinutes = !empty($timeoutSetting['setting_value']) ? (int)$timeoutSetting['setting_value'] : 15;

        if (Session::checkAdminInactivity($timeoutMinutes)) {
            Session::flash('warning', 'Session locked due to ' . $timeoutMinutes . ' minutes of inactivity. Enter password to resume.');
            Response::redirect('/admin/lockscreen');
            return false;
        }

        return true;
    }
}
