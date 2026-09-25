<?php
// Dheeraja Matrimony — Application Entry Point
declare(strict_types=1);

// Error handling in development
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Set default timezone
date_default_timezone_set('Asia/Kolkata');

// 0. Static file serving for PHP built-in server
$requestedFile = __DIR__ . urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH));
if (is_file($requestedFile)) {
    return false;
}

// 1. Require Autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Core\Request;
use App\Core\Router;
use App\Core\Session;

// 2. Start Secure Session
Session::start();

// 3. Instantiate Request & Router
$request = new Request();
$router  = new Router();

// 4. Load Route Definitions
require_once dirname(__DIR__) . '/routes/web.php';
require_once dirname(__DIR__) . '/routes/admin.php';
require_once dirname(__DIR__) . '/routes/api.php';

// 5. Dispatch Routing Pipeline
$router->dispatch($request);
