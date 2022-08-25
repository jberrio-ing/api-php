<?php

namespace App\routes;

class Router
{
    public static function init(): void
    {
        $router = require __DIR__ . "/routes.php";
        $requestUri = $_SERVER["REQUEST_URI"];
        $requestMethod = strtolower($_SERVER["REQUEST_METHOD"]);

        if ($route = $router[$requestUri]) {
            if ($requestMethod == $route["method"]) {
                $route["action"]();
            }
        } else {
            echo json_encode(["message" => "Not found"]);
            http_response_code(404);
        }
        echo header("content-type:application/json");
    }
}
