<?php

namespace App\Core;

class Route
{
    protected $routes = [
        "GET"    => [],
        "POST"   => [],
        "PUT"    => [],
        "DELETE" => []
    ];

    public static function addRoute($methods, $url, $action) {
        $router = Router::getInstance();
        $newAction = [
            'controller' => $action[0],
            'method' => $action[1] ?? 'index'
        ];
        $newUrl = trim($url, '/');
        $router->addRoute($methods, $newUrl, $newAction);
    }

    public static function get($url, $action)
    {
        self::addRoute("GET", $url, $action);
        self::addRoute("HEAD", $url, $action);
    }

    public static function post($url, $action)
    {
        self::addRoute("POST", $url, $action);
    }

    public static function put($url, $action)
    {
        self::addRoute("PUT", $url, $action);
    }

    public static function delete($url, $action)
    {
        self::addRoute("DELETE", $url, $action);
    }

    public static function check($methods, $url) {
        $router = Router::getInstance();
        return $router->checkRoute($methods, $url);
    }
}
