<?php
use App\Core\Router;
use App\Middlewares\CorsMiddleware;
use App\Middlewares\AntiHackingMiddleware;
use App\Middlewares\AuthMiddleware;

/** @var Router $router */

$router->group([
    'prefix' => 'api/v1',
    'middleware' => [
        CorsMiddleware::class,
        AntiHackingMiddleware::class
    ]
], function (Router $r) {

    // Public Mobile Auth
    $r->post('/auth/register', 'App\Controllers\Api\AuthController@register');
    $r->post('/auth/login', 'App\Controllers\Api\AuthController@login');
    $r->get('/plans', 'App\Controllers\Api\PlanController@index');

    // Protected Mobile Endpoints
    $r->group([
        'middleware' => [AuthMiddleware::class]
    ], function (Router $authR) {
        // Current User Dossier
        $authR->get('/auth/me', 'App\Controllers\Api\AuthController@me');

        // Matches & Recommendations
        $authR->get('/matches/feed', 'App\Controllers\Api\MatchController@feed');
        $authR->post('/matches/search', 'App\Controllers\Api\MatchController@search');
        $authR->get('/profiles/{mid}', 'App\Controllers\Api\MatchController@viewProfile');
        $authR->post('/profiles/reveal-contact', 'App\Controllers\Api\MatchController@revealContact');

        // Express Interest
        $authR->post('/interests/send', 'App\Controllers\Api\InterestController@send');
        $authR->post('/interests/{id}/accept', 'App\Controllers\Api\InterestController@accept');
        $authR->get('/interests/received', 'App\Controllers\Api\InterestController@listReceived');

        // Direct In-App Chat
        $authR->get('/chat/threads', 'App\Controllers\Api\ChatController@threads');
        $authR->get('/chat/{partner_id}/messages', 'App\Controllers\Api\ChatController@messages');
        $authR->post('/chat/send', 'App\Controllers\Api\ChatController@send');

        // Subscriptions & Launch Free VIP
        $authR->get('/plans/current', 'App\Controllers\Api\PlanController@current');
        $authR->post('/plans/launch-vip/claim', 'App\Controllers\Api\PlanController@claimLaunchVip');
    });
});
