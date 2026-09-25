<?php
return [
    'driver'            => 'smtp',
    'host'              => getenv('MAIL_HOST') ?: 'smtp.gmail.com',
    'port'              => (int)(getenv('MAIL_PORT') ?: 587),
    'encryption'        => getenv('MAIL_ENCRYPTION') ?: 'tls',
    'username'          => getenv('MAIL_USERNAME') ?: 'dheerajamatrimony@gmail.com',
    'password'          => getenv('MAIL_PASSWORD') ?: 'iockhnknzevcedmx', // Google 16-character App Password
    'from_address'      => getenv('MAIL_FROM_ADDRESS') ?: 'dheerajamatrimony@gmail.com',
    'from_name'         => getenv('MAIL_FROM_NAME') ?: 'Dheeraja Royal Matrimony',
    'support_email'     => getenv('MAIL_SUPPORT') ?: 'dheerajamatrimony@gmail.com',
    'admin_alert_email' => getenv('MAIL_ADMIN_ALERT') ?: 'dheerajamatrimony@gmail.com',
    'debug'             => false
];
