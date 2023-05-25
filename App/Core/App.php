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
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}