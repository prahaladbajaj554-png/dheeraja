<?php
namespace App\Core;

class Response
{
    public static function json(array $data, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }

    public static function apiSuccess(string $message = 'Success', array $data = [], array $meta = [], int $status = 200): void
    {
        self::json([
            'success'     => true,
            'status_code' => $status,
            'message'     => $message,
            'data'        => $data,
            'meta'        => array_merge(['timestamp' => time()], $meta)
        ], $status);
    }

    public static function apiError(string $message = 'Error', int $status = 400, array $errors = []): void
    {
        self::json([
            'success'     => false,
            'status_code' => $status,
            'message'     => $message,
            'errors'      => $errors,
            'meta'        => ['timestamp' => time()]
        ], $status);
    }

    public static function redirect(string $url): void
    {
        header("Location: {$url}");
        exit;
    }

    public static function back(): void
    {
        $referer = $_SERVER['HTTP_REFERER'] ?? '/';
        header("Location: {$referer}");
        exit;
    }

    public static function view(string $viewPath, array $data = [], ?string $layout = null): void
    {
        extract($data);
        $viewsDir = dirname(__DIR__, 2) . '/views/';
        $viewFile = $viewsDir . $viewPath . '.php';

        if (!file_exists($viewFile)) {
            http_response_code(500);
            die("View template not found: [{$viewPath}]");
        }

        ob_start();
        include $viewFile;
        $content = ob_get_clean();

        if ($layout) {
            $layoutFile = $viewsDir . $layout . '.php';
            if (file_exists($layoutFile)) {
                include $layoutFile;
                exit;
            }
        }

        echo $content;
        exit;
    }
}
