<?php
namespace App\Core;

class Session
{
    public static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            // Set secure session cookie parameters
            ini_set('session.cookie_httponly', 1);
            ini_set('session.use_only_cookies', 1);
            session_start();
        }
    }

    public static function set(string $key, $value): void
    {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function get(string $key, $default = null)
    {
        self::start();
        return $_SESSION[$key] ?? $default;
    }

    public static function has(string $key): bool
    {
        self::start();
        return isset($_SESSION[$key]);
    }

    public static function remove(string $key): void
    {
        self::start();
        unset($_SESSION[$key]);
    }

    public static function destroy(): void
    {
        self::start();
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
    }

    // Flash Messages
    public static function flash(string $key, string $message): void
    {
        self::start();
        $_SESSION['_flash'][$key] = $message;
    }

    public static function getFlash(string $key, $default = null)
    {
        self::start();
        if (isset($_SESSION['_flash'][$key])) {
            $msg = $_SESSION['_flash'][$key];
            unset($_SESSION['_flash'][$key]);
            return $msg;
        }
        return $default;
    }

    // CSRF Protection
    public static function csrfToken(): string
    {
        self::start();
        if (empty($_SESSION['_csrf_token'])) {
            $_SESSION['_csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['_csrf_token'];
    }

    public static function validateCsrf(?string $token): bool
    {
        self::start();
        $stored = $_SESSION['_csrf_token'] ?? '';
        return !empty($stored) && !empty($token) && hash_equals($stored, $token);
    }

    // Admin Session Helpers
    public static function loginAdmin(array $user): void
    {
        self::start();
        session_regenerate_id(true);
        $_SESSION['admin_user'] = [
            'id'           => $user['id'],
            'matrimony_id' => $user['matrimony_id'],
            'email'        => $user['email'],
            'role'         => $user['role'],
            'name'         => ($user['first_name'] ?? 'Admin') . ' ' . ($user['last_name'] ?? '')
        ];
        $_SESSION['admin_last_activity'] = time();
        $_SESSION['admin_locked'] = false;
    }

    public static function logoutAdmin(): void
    {
        self::start();
        unset($_SESSION['admin_user']);
        unset($_SESSION['admin_last_activity']);
        unset($_SESSION['admin_locked']);
    }

    public static function getAdmin(): ?array
    {
        self::start();
        return $_SESSION['admin_user'] ?? null;
    }

    public static function isAdminLoggedIn(): bool
    {
        self::start();
        return !empty($_SESSION['admin_user']);
    }

    public static function isLocked(): bool
    {
        self::start();
        return !empty($_SESSION['admin_locked']);
    }

    public static function lock(): void
    {
        self::start();
        $_SESSION['admin_locked'] = true;
    }

    public static function unlock(): void
    {
        self::start();
        $_SESSION['admin_locked'] = false;
        $_SESSION['admin_last_activity'] = time();
    }

    public static function checkAdminInactivity(int $timeoutMinutes = 15): bool
    {
        self::start();
        if (!self::isAdminLoggedIn()) {
            return false;
        }

        $lastActivity = $_SESSION['admin_last_activity'] ?? time();
        if ((time() - $lastActivity) > ($timeoutMinutes * 60)) {
            self::lock();
            return true; // Timed out
        }

        $_SESSION['admin_last_activity'] = time();
        return false;
    }
}
