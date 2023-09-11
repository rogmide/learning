<?php

namespace App\Routes;

class RouteNotFoundError extends \Exception
{
    protected $message = '404 Not Found';
}
