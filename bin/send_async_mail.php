<?php
// Dheeraja Matrimony — Async Mail Dispatcher (Fire & Forget)
if (php_sapi_name() !== 'cli') {
    exit;
}

require dirname(__DIR__) . '/vendor/autoload.php';

$rawPayload = $argv[1] ?? '';
if (empty($rawPayload)) {
    exit;
}

$data = json_decode(base64_decode($rawPayload), true);
if (!is_array($data)) {
    exit;
}

// 1. Alert Admin
if (!empty($data['admin_subject']) && !empty($data['admin_body'])) {
    try {
        \App\Helpers\MailerHelper::alertAdmin($data['admin_subject'], $data['admin_body']);
    } catch (\Throwable $e) {}
}

// 2. Alert User
if (!empty($data['user_email']) && filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
    try {
        \App\Helpers\MailerHelper::sendFreeVipGranted(
            ['email' => $data['user_email'], 'first_name' => $data['user_name'] ?? 'सदस्य'],
            'Dheeraja Royal VIP Pro',
            90
        );
    } catch (\Throwable $e) {}
}
