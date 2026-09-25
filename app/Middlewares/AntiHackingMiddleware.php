<?php
namespace App\Middlewares;

use App\Core\Request;
use App\Core\Response;
use App\Core\Database;

class AntiHackingMiddleware
{
    public function handle(Request $request): bool
    {
        // 1. Set Defensive HTTP Security Headers
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: strict-origin-when-cross-origin');

        $ip = $request->ip();

        // 2. Check IP Firewall Blacklist
        $blocked = Database::fetchOne("SELECT * FROM `blocked_ips` WHERE `ip_address` = :ip AND (`blocked_until` IS NULL OR `blocked_until` > NOW())", ['ip' => $ip]);
        if ($blocked) {
            http_response_code(403);
            die("Access Denied: Your IP [{$ip}] has been blocked due to security violations. Reason: " . htmlspecialchars($blocked['reason']));
        }

        // 3. Inspect Raw Query & Body for Dangerous Patterns (SQLi / Directory Traversal)
        $uri = $_SERVER['REQUEST_URI'] ?? '';
        $dangerousPatterns = [
            '/(union\s+all\s+select)/i',
            '/(\bselect\b.+\bfrom\b.+\bwhere\b)/i',
            '/(<script.*?>.*?<\/script>)/is',
            '/(\.\.\/|\.\.\\\)/'
        ];

        foreach ($dangerousPatterns as $pattern) {
            if (preg_match($pattern, $uri)) {
                error_log("AntiHacking Triggered: Suspicious pattern detected from IP {$ip} - URI: {$uri}");
                
                // Auto-record in blocked IPs if malicious
                Database::query("INSERT IGNORE INTO `blocked_ips` (`ip_address`, `reason`, `blocked_until`) VALUES (:ip, 'Malicious payload pattern detected', DATE_ADD(NOW(), INTERVAL 2 HOUR))", [
                    'ip' => $ip
                ]);

                http_response_code(400);
                die("Security Error: Suspicious request rejected by AntiHacking Firewall.");
            }
        }

        return true;
    }
}
