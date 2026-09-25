<?php
namespace App\Core;

class Request
{
    private array $routeParams = [];

    public function method(): string
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        if ($method === 'POST' && isset($_POST['_method'])) {
            return strtoupper($_POST['_method']);
        }
        return strtoupper($method);
    }

    public function uri(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $pos = strpos($uri, '?');
        if ($pos !== false) {
            $uri = substr($uri, 0, $pos);
        }
        return rtrim($uri, '/') ?: '/';
    }

    public function setRouteParams(array $params): void
    {
        $this->routeParams = array_merge($this->routeParams, $params);
    }

    public function setParam(string $key, $value): void
    {
        $this->routeParams[$key] = $value;
    }

    public function param(string $key, $default = null)
    {
        return $this->routeParams[$key] ?? $default;
    }

    public function all(): array
    {
        $data = array_merge($_GET, $_POST, $this->json());
        return $this->sanitize($data);
    }

    public function get(string $key, $default = null)
    {
        return isset($_GET[$key]) ? $this->sanitize($_GET[$key]) : $default;
    }

    private ?array $parsedJson = null;

    public function post(string $key, $default = null)
    {
        if (isset($_POST[$key])) {
            return $this->sanitize($_POST[$key]);
        }
        $json = $this->json();
        return $json[$key] ?? $default;
    }

    public function input(string $key, $default = null)
    {
        return $this->all()[$key] ?? $default;
    }

    public function json(): array
    {
        if ($this->parsedJson !== null) {
            return $this->parsedJson;
        }
        $raw = file_get_contents('php://input');
        if (empty($raw)) {
            $this->parsedJson = [];
            return $this->parsedJson;
        }
        $decoded = json_decode($raw, true);
        $this->parsedJson = is_array($decoded) ? $this->sanitize($decoded) : [];
        return $this->parsedJson;
    }

    public function file(string $key): ?array
    {
        return $_FILES[$key] ?? null;
    }

    public function ip(): string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ips[0]);
        }
        return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    }

    public function userAgent(): string
    {
        return $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    }

    public function header(string $key): ?string
    {
        $serverKey = 'HTTP_' . strtoupper(str_replace('-', '_', $key));
        return $_SERVER[$serverKey] ?? null;
    }

    public function bearerToken(): ?string
    {
        $header = $this->header('AUTHORIZATION') ?? ($_SERVER['REDIRECT_HTTP_AUTHORIZATION'] ?? null);
        if ($header && preg_match('/Bearer\s+(.*)$/i', $header, $matches)) {
            return trim($matches[1]);
        }
        return null;
    }

    public function isJson(): bool
    {
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
        return strpos($contentType, 'application/json') !== false;
    }

    public function isAjax(): bool
    {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
               strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    }

    private function sanitize($input)
    {
        if (is_array($input)) {
            foreach ($input as $k => $v) {
                $input[$k] = $this->sanitize($v);
            }
            return $input;
        }
        if (is_string($input)) {
            return trim(strip_tags($input));
        }
        return $input;
    }
}
