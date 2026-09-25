<?php
namespace App\Middlewares;

use App\Core\Request;
use App\Core\Response;
use App\Core\Session;

class AdminAuthMiddleware
{
    public function handle(Request $request): bool
    {
        Session::start();

        if (!Session::isAdminLoggedIn()) {
            Session::flash('error', 'Please log in to access the Master Admin Panel.');
            Response::redirect('/admin/login');
            return false;
        }

        // If locked due to inactivity, redirect to lockscreen
        if (Session::isLocked() && $request->uri() !== '/admin/lockscreen') {
            Response::redirect('/admin/lockscreen');
            return false;
        }

        return true;
    }
}
