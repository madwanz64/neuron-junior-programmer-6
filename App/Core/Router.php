<?php

namespace App\Core;

use Exception;
use HttpRequestMethodException;
use HttpUrlException;

class Router
{
    private $routes;
    private static $instance = null;

    private function __construct()
    {
        $this->routes = [];
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new Router();
        }

        return self::$instance;
    }

    public function addRoute($methods, $url, $action)
    {
        $this->routes[$url][$methods] = $action;
    }

    public function checkRoute($methods, $url)
    {
        if (!array_key_exists($url, $this->routes))
        {
            return ['controller' => Controller::class, 'method' => 'error404'];
        }
        if (!array_key_exists($methods, $this->routes[$url]))
        {
            return ['controller' => Controller::class, 'method' => 'error415'];
        }
        return $this->routes[$url][$methods];
    }
}