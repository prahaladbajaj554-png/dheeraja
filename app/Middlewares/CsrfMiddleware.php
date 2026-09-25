<?php
namespace App\Middlewares;

use App\Core\Request;
use App\Core\Response;
use App\Core\Session;

class CsrfMiddleware
{
    public function handle(Request $request): bool
    {
        $method = $request->method();

        // Only enforce for state-altering requests
        if (in_array($method, ['POST', 'PUT', 'DELETE'])) {
            $token = $request->post('_csrf_token') ?? $request->header('X-CSRF-TOKEN');

            if (!Session::validateCsrf($token)) {
                http_response_code(419);
                if ($request->isJson() || $request->isAjax()) {
                    Response::apiError('CSRF token verification failed or expired. Please refresh the page.', 419);
                } else {
                    Session::flash('error', 'Security token mismatch. Please try submitting again.');
                    Response::back();
                }
                return false;
            }
        }

        return true;
    }
}
