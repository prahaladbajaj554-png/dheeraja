<?php
// Dheeraja Matrimony — Application Entry Point
declare(strict_types=1);

// Error handling in development
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Set default timezone
date_default_timezone_set('Asia/Kolkata');

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
