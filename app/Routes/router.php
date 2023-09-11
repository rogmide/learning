<?php

namespace App\Routes;

class Router
{

    public array $routes = [];

    public function register($route, callable $action)
    {
        $this->routes[$route] = $action;

        return $this;
    }

    public function resolve($requestUri)
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundError();
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $class = new $class();
            }

            if (method_exists($class, $method)) {
                return call_user_func_array([$class, $method], []);
            }
        }
    }
}
