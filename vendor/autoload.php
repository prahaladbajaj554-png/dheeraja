<?php
// Vendor & PSR-4 Autoloader

spl_autoload_register(function ($class) {
    // PHPMailer mapping
    if (strpos($class, 'PHPMailer\\PHPMailer\\') === 0) {
        $short = str_replace('PHPMailer\\PHPMailer\\', '', $class);
        $file = __DIR__ . '/phpmailer/phpmailer/src/' . $short . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

    // App namespace mapping
    if (strpos($class, 'App\\') === 0) {
        $short = str_replace('App\\', '', $class);
        $file = dirname(__DIR__) . '/app/' . str_replace('\\', '/', $short) . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Load global helpers
require_once dirname(__DIR__) . '/app/Helpers/functions.php';
