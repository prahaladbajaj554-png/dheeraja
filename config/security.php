<?php
return [
    'session_timeout_minutes' => 15,
    'max_login_attempts'      => 5,
    'lockout_time_minutes'    => 15,
    'rate_limit_per_minute'   => 60,
    'csrf_token_name'         => '_csrf_token',
    'allowed_upload_mimes'    => [
        'image/jpeg',
        'image/png',
        'image/webp',
        'application/pdf'
    ],
    'max_upload_size_bytes'   => 5 * 1024 * 1024, // 5MB
];
