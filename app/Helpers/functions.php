<?php

use App\Core\Session;
use App\Core\Response;
use App\Core\Database;

if (!function_exists('view')) {
    function view(string $viewPath, array $data = [], ?string $layout = 'admin/layouts/master'): void {
        Response::view($viewPath, $data, $layout);
    }
}

if (!function_exists('redirect')) {
    function redirect(string $url): void {
        Response::redirect($url);
    }
}

if (!function_exists('csrf_token')) {
    function csrf_token(): string {
        return Session::csrfToken();
    }
}

if (!function_exists('csrf_field')) {
    function csrf_field(): string {
        $token = csrf_token();
        return '<input type="hidden" name="_csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
    }
}

if (!function_exists('flash')) {
    function flash(string $key, $default = null) {
        return Session::getFlash($key, $default);
    }
}

if (!function_exists('auth_admin')) {
    function auth_admin(): ?array {
        return Session::getAdmin();
    }
}

if (!function_exists('asset')) {
    function asset(string $path): string {
        return '/' . ltrim($path, '/');
    }
}

if (!function_exists('old')) {
    function old(string $key, $default = '') {
        return htmlspecialchars($_POST[$key] ?? $_GET[$key] ?? $default, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('format_inr')) {
    function format_inr($number): string {
        if (!is_numeric($number)) return '₹0';
        $dec = '';
        $number = (string)round($number);
        $len = strlen($number);
        if ($len <= 3) {
            return '₹' . $number;
        }
        $last3 = substr($number, -3);
        $rest = substr($number, 0, $len - 3);
        $restFormatted = preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $rest);
        return '₹' . $restFormatted . ',' . $last3;
    }
}

if (!function_exists('time_ago')) {
    function time_ago($datetime): string {
        $time = is_numeric($datetime) ? $datetime : strtotime($datetime);
        $diff = time() - $time;
        if ($diff < 60) return 'just now';
        if ($diff < 3600) return floor($diff / 60) . 'm ago';
        if ($diff < 86400) return floor($diff / 3600) . 'h ago';
        if ($diff < 604800) return floor($diff / 86400) . 'd ago';
        return date('d M Y', $time);
    }
}

if (!function_exists('setting')) {
    function setting(string $key, $default = null) {
        static $settings = null;
        if ($settings === null) {
            $rows = Database::fetchAll("SELECT setting_key, setting_value FROM `app_settings`");
            $settings = [];
            foreach ($rows as $r) {
                $settings[$r['setting_key']] = $r['setting_value'];
            }
        }
        return $settings[$key] ?? $default;
    }
}
