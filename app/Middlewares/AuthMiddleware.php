<?php
namespace App\Middlewares;

use App\Core\Request;
use App\Core\Response;
use App\Core\Database;
use App\Helpers\SecurityHelper;

class AuthMiddleware
{
    public function handle(Request $request): bool
    {
        $token = $request->bearerToken();
        if (!$token) {
            Response::apiError('Authentication token missing. Please pass Authorization: Bearer <token>', 401);
            return false;
        }

        $payload = SecurityHelper::verifyJwt($token);
        if (!$payload || empty($payload['sub'])) {
            Response::apiError('Invalid or expired authentication token. Please log in again.', 401);
            return false;
        }

        $userId = $payload['sub'];
        $user = Database::fetchOne("SELECT id, matrimony_id, email, phone, role, status, is_vip, is_kyc_verified FROM `users` WHERE `id` = :id LIMIT 1", ['id' => $userId]);

        if (!$user) {
            Response::apiError('User account not found.', 401);
            return false;
        }

        if ($user['status'] === 'banned') {
            Response::apiError('Your account has been banned due to policy violations. Contact support.', 403);
            return false;
        }

        // Attach authenticated user to request params
        $request->setParam('auth_user', $user);

        return true;
    }
}
