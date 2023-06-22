<?php

namespace App\Controllers\Api;

use App\Core\Controller;
use App\Core\JsonResponse;

class ExampleController extends Controller
{
    public function index()
    {
        $response = JsonResponse::make();

        $data = [
            'url' => $_SERVER['REQUEST_URI'],
            'method' => $_SERVER['REQUEST_METHOD'],
            'time' => $_SERVER['REQUEST_TIME']
        ];

        $response->setData($data);

        return $response;
    }
}