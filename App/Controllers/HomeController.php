<?php
namespace App\Controllers;
use App\Core\Controller;

class  HomeController extends Controller
{
    public function index()
    {
        echo "Hello World";
    }

    public function show()
    {
        echo "Hello World Show";
    }
}