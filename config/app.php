<?php
return [
    'name'           => 'Dheeraja Matrimony',
    'tagline'        => 'Sacred Connections • Royal Heritage • Trust',
    'env'            => getenv('APP_ENV') ?: 'development',
    'debug'          => getenv('APP_DEBUG') !== 'false',
    'url'            => getenv('APP_URL') ?: 'http://localhost:8000',
    'timezone'       => 'Asia/Kolkata',
    'key'            => getenv('APP_KEY') ?: 'dheeraja_matrimony_secret_key_2026_xyz987',
    'currency'       => 'INR',
    'currency_symbol'=> '₹'
];
