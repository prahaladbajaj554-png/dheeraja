<?php
namespace App\Helpers;

use App\Core\Database;

class SecurityHelper
{
    public static function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
    }

    public static function verifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

    public static function generateMatrimonyId(): string
    {
        $max = Database::fetchOne("SELECT MAX(id) as max_id FROM `users`");
        $nextId = (int)($max['max_id'] ?? 0) + 1;
        return 'DM' . str_pad((string)$nextId, 5, '0', STR_PAD_LEFT);
    }

    public static function generateJwt(array $payload, int $ttl = 2592000): string // Default 30 days
    {
        $config = require dirname(__DIR__, 2) . '/config/app.php';
        $secret = $config['key'];

        $header = ['typ' => 'JWT', 'alg' => 'HS256'];
        $payload['iat'] = time();
        $payload['exp'] = time() + $ttl;

        $base64UrlHeader = self::base64UrlEncode(json_encode($header));
        $base64UrlPayload = self::base64UrlEncode(json_encode($payload));

        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);
        $base64UrlSignature = self::base64UrlEncode($signature);

        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    }

    public static function verifyJwt(?string $token): ?array
    {
        if (empty($token)) {
            return null;
        }

        $parts = explode('.', $token);
        if (count($parts) !== 3) {
            return null;
        }

        [$base64UrlHeader, $base64UrlPayload, $base64UrlSignature] = $parts;

        $config = require dirname(__DIR__, 2) . '/config/app.php';
        $secret = $config['key'];

        $signature = self::base64UrlDecode($base64UrlSignature);
        $expectedSignature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);

        if (!hash_equals($signature, $expectedSignature)) {
            return null; // Signature mismatch
        }

        $payload = json_decode(self::base64UrlDecode($base64UrlPayload), true);
        if (!is_array($payload) || !isset($payload['exp']) || $payload['exp'] < time()) {
            return null; // Expired or invalid
        }

        return $payload;
    }

    public static function maskPhone(string $phone): string
    {
        if (strlen($phone) < 6) return $phone;
        return substr($phone, 0, 3) . '•••••' . substr($phone, -2);
    }

    public static function maskEmail(string $email): string
    {
        $parts = explode('@', $email);
        if (count($parts) !== 2) return $email;
        $name = $parts[0];
        $domain = $parts[1];
        $maskedName = substr($name, 0, 2) . str_repeat('•', max(3, strlen($name) - 3)) . substr($name, -1);
        return $maskedName . '@' . $domain;
    }

    private static function base64UrlEncode(string $data): string
    {
        return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($data));
    }

    private static function base64UrlDecode(string $data): string
    {
        $remainder = strlen($data) % 4;
        if ($remainder) {
            $data .= str_repeat('=', 4 - $remainder);
        }
        return base64_decode(str_replace(['-', '_'], ['+', '/'], $data));
    }
}
