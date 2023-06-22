<?php
namespace App\Core;

use App\Controllers\HomeController;

class App
{
    protected $controller = HomeController::class;
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $this->loadRoute();
        $this->controller = new $this->controller;
        $response = call_user_func_array([$this->controller, $this->method], $this->params);
        if ($response instanceof Response){
            $response->build();
        }

    }

    public function loadRoute()
    {
        require_once getcwd().'/../App/router.php';
        $this->loadController();
    }

    public function loadController()
    {
        $url = $_GET['url'] ?? '';

        $action = Route::check($_SERVER['REQUEST_METHOD'], $url);
        $this->controller = $action['controller'];
        $this->method = $action['method'];
    }
}