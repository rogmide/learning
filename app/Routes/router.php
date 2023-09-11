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

        return call_user_func($action);
    }
}
