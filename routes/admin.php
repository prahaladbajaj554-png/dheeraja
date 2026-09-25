<?php
use App\Core\Router;
use App\Middlewares\AdminAuthMiddleware;
use App\Middlewares\SessionTimeoutMiddleware;
use App\Middlewares\CsrfMiddleware;
use App\Middlewares\AntiHackingMiddleware;

/** @var Router $router */

// Public Admin Auth Routes
$router->get('/admin/login', 'App\Controllers\Admin\AuthController@showLogin');
$router->post('/admin/login', 'App\Controllers\Admin\AuthController@login');
$router->get('/admin/logout', 'App\Controllers\Admin\AuthController@logout');
$router->get('/admin/lockscreen', 'App\Controllers\Admin\AuthController@showLockscreen');
$router->post('/admin/unlock', 'App\Controllers\Admin\AuthController@unlock');

// Protected Admin Routes Group
$router->group([
    'prefix' => 'admin',
    'middleware' => [
        AntiHackingMiddleware::class,
        AdminAuthMiddleware::class,
        SessionTimeoutMiddleware::class,
        CsrfMiddleware::class
    ]
], function (Router $r) {
    // Root Admin Redirect
    $r->get('/', function() {
        \App\Core\Response::redirect('/admin/dashboard');
    });

    // Executive Dashboard
    $r->get('/dashboard', 'App\Controllers\Admin\DashboardController@index');

    // User Management Suite (Independent Pages)
    $r->get('/users', 'App\Controllers\Admin\UsersController@index');
    $r->get('/users/add', 'App\Controllers\Admin\UsersController@add');
    $r->post('/users/create', 'App\Controllers\Admin\UsersController@create');
    $r->get('/users/view/{id}', 'App\Controllers\Admin\UsersController@show');
    $r->get('/users/edit/{id}', 'App\Controllers\Admin\UsersController@edit');
    $r->post('/users/update/{id}', 'App\Controllers\Admin\UsersController@update');
    $r->get('/users/grant-vip/{id}', 'App\Controllers\Admin\UsersController@grantVipForm');
    $r->post('/users/grant-vip/{id}', 'App\Controllers\Admin\UsersController@grantVip');
    $r->post('/users/revoke-vip/{id}', 'App\Controllers\Admin\UsersController@revokeVip');
    $r->post('/users/toggle-status/{id}', 'App\Controllers\Admin\UsersController@toggleStatus');
    $r->post('/users/delete/{id}', 'App\Controllers\Admin\UsersController@delete');

    // KYC Workbench
    $r->get('/kyc', 'App\Controllers\Admin\KycController@index');
    $r->get('/kyc/review/{id}', 'App\Controllers\Admin\KycController@review');
    $r->post('/kyc/approve/{id}', 'App\Controllers\Admin\KycController@approve');
    $r->post('/kyc/reject/{id}', 'App\Controllers\Admin\KycController@reject');

    // Subscriptions Catalog & Manual Grant Ledger
    $r->get('/subscriptions', 'App\Controllers\Admin\SubscriptionsController@index');
    $r->get('/subscriptions/add', 'App\Controllers\Admin\SubscriptionsController@add');
    $r->post('/subscriptions/create', 'App\Controllers\Admin\SubscriptionsController@create');
    $r->get('/subscriptions/edit/{id}', 'App\Controllers\Admin\SubscriptionsController@edit');
    $r->post('/subscriptions/update/{id}', 'App\Controllers\Admin\SubscriptionsController@update');
    $r->get('/subscriptions/grant-logs', 'App\Controllers\Admin\SubscriptionsController@grantLogs');

    // Promotions & Launch Mode
    $r->get('/promotions', 'App\Controllers\Admin\PromotionsController@index');
    $r->post('/promotions/launch-vip', 'App\Controllers\Admin\PromotionsController@updateLaunchPromo');
    $r->get('/promotions/add', 'App\Controllers\Admin\PromotionsController@add');
    $r->post('/promotions/create', 'App\Controllers\Admin\PromotionsController@create');

    // WhatsApp Communities
    $r->get('/communities', 'App\Controllers\Admin\CommunitiesController@index');
    $r->get('/communities/add', 'App\Controllers\Admin\CommunitiesController@add');
    $r->post('/communities/create', 'App\Controllers\Admin\CommunitiesController@create');
    $r->get('/communities/edit/{id}', 'App\Controllers\Admin\CommunitiesController@edit');
    $r->post('/communities/update/{id}', 'App\Controllers\Admin\CommunitiesController@update');
    $r->post('/communities/delete/{id}', 'App\Controllers\Admin\CommunitiesController@delete');

    // Mail & PHPMailer Settings
    $r->get('/settings/mail', 'App\Controllers\Admin\SettingsController@mailSettings');
    $r->post('/settings/mail', 'App\Controllers\Admin\SettingsController@saveMailSettings');
    $r->post('/settings/mail/test', 'App\Controllers\Admin\SettingsController@sendTestEmail');

    // Security Operations Center
    $r->get('/security', 'App\Controllers\Admin\SecurityController@auditLogs');
    $r->get('/security/audit-logs', 'App\Controllers\Admin\SecurityController@auditLogs');
    $r->get('/security/firewall', 'App\Controllers\Admin\SecurityController@ipFirewall');
    $r->post('/security/block-ip', 'App\Controllers\Admin\SecurityController@blockIp');
    $r->post('/security/unblock-ip/{id}', 'App\Controllers\Admin\SecurityController@unblockIp');
    $r->post('/security/session-config', 'App\Controllers\Admin\SecurityController@updateSecurityConfig');
});
