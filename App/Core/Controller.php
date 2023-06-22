<?php
namespace App\Core;
class Controller
{
    public function error404()
    {
        http_response_code(404);
        echo '404 Not Found';
    }

    public function error415()
    {
        http_response_code(415);
        echo '415 Unsupported Media Type';
    }
}