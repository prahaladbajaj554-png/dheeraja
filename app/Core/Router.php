<?php
namespace App\Core;

class Router
{
    private array $routes = [];
    private string $currentPrefix = '';
    private array $currentMiddlewares = [];

    public function get(string $path, $handler, array $middlewares = []): self
    {
        return $this->addRoute('GET', $path, $handler, $middlewares);
    }

    public function post(string $path, $handler, array $middlewares = []): self
    {
        return $this->addRoute('POST', $path, $handler, $middlewares);
    }

    public function put(string $path, $handler, array $middlewares = []): self
    {
        return $this->addRoute('PUT', $path, $handler, $middlewares);
    }

    public function delete(string $path, $handler, array $middlewares = []): self
    {
        return $this->addRoute('DELETE', $path, $handler, $middlewares);
    }

    public function group(array $attributes, callable $callback): void
    {
        $previousPrefix = $this->currentPrefix;
        $previousMiddlewares = $this->currentMiddlewares;

        if (isset($attributes['prefix'])) {
            $this->currentPrefix = rtrim($this->currentPrefix . '/' . trim($attributes['prefix'], '/'), '/');
        }

        if (isset($attributes['middleware'])) {
            $middlewares = is_array($attributes['middleware']) ? $attributes['middleware'] : [$attributes['middleware']];
            $this->currentMiddlewares = array_merge($this->currentMiddlewares, $middlewares);
        }

        $callback($this);

        $this->currentPrefix = $previousPrefix;
        $this->currentMiddlewares = $previousMiddlewares;
    }

    private function addRoute(string $method, string $path, $handler, array $middlewares): self
    {
        $fullPath = rtrim($this->currentPrefix . '/' . trim($path, '/'), '/') ?: '/';
        $allMiddlewares = array_merge($this->currentMiddlewares, $middlewares);

        // Convert path with {param} into regex
        $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<$1>[^/]+)', $fullPath);
        $pattern = '#^' . $pattern . '$#';

        $this->routes[] = [
            'method'      => $method,
            'path'        => $fullPath,
            'pattern'     => $pattern,
            'handler'     => $handler,
            'middlewares' => $allMiddlewares
        ];

        return $this;
    }

    public function dispatch(Request $request)
    {
        $method = $request->method();
        $uri = $request->uri();

        foreach ($this->routes as $route) {
            $matchesMethod = ($route['method'] === $method) || ($method === 'HEAD' && $route['method'] === 'GET');
            if ($matchesMethod && preg_match($route['pattern'], $uri, $matches)) {
                // Extract named route parameters
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                $request->setRouteParams($params);

                // Run middlewares
                foreach ($route['middlewares'] as $mw) {
                    $mwInstance = is_string($mw) ? new $mw() : $mw;
                    $result = $mwInstance->handle($request);
                    if ($result === false) {
                        return; // Blocked by middleware
                    }
                }

                // Invoke Handler
                $handler = $route['handler'];
                if (is_callable($handler)) {
                    return call_user_func($handler, $request);
                }

                if (is_string($handler) && strpos($handler, '@') !== false) {
                    [$ctrlClass, $action] = explode('@', $handler);
                    if (!class_exists($ctrlClass)) {
                        http_response_code(500);
                        die("Controller class [{$ctrlClass}] not found.");
                    }
                    $controller = new $ctrlClass();
                    if (!method_exists($controller, $action)) {
                        http_response_code(500);
                        die("Method [{$action}] not found in controller [{$ctrlClass}].");
                    }
                    return $controller->$action($request);
                }
            }
        }

        // No route matched
        if ($request->isJson() || strpos($uri, '/api/') === 0) {
            return Response::apiError("Endpoint [{$method} {$uri}] not found.", 404);
        }

        http_response_code(404);
        Response::view('errors/404', ['uri' => $uri, 'method' => $method], 'admin/layouts/master');
    }
}
