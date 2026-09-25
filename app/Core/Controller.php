<?php
namespace App\Core;

abstract class Controller
{
    protected function validate(array $data, array $rules): array
    {
        $validator = new Validator();
        if (!$validator->validate($data, $rules)) {
            return $validator->errors();
        }
        return [];
    }

    protected function json(array $data, int $statusCode = 200): void
    {
        Response::json($data, $statusCode);
    }

    protected function apiSuccess(string $message = 'Success', array $data = [], array $meta = [], int $status = 200): void
    {
        Response::apiSuccess($message, $data, $meta, $status);
    }

    protected function apiError(string $message = 'Error', int $status = 400, array $errors = []): void
    {
        Response::apiError($message, $status, $errors);
    }

    protected function view(string $viewPath, array $data = [], ?string $layout = 'admin/layouts/master'): void
    {
        Response::view($viewPath, $data, $layout);
    }

    protected function redirect(string $url): void
    {
        Response::redirect($url);
    }

    protected function flash(string $key, string $message): void
    {
        Session::flash($key, $message);
    }
}
