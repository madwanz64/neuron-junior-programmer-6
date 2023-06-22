<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\View;

class ExampleController extends Controller
{
    public function index()
    {
        $view = View::make();

        $view->setContent('<p>This is an example of an endpoint that returns </p>');
        return $view;
    }
}