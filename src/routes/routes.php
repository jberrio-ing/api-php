<?php

use App\Controllers\UserController;

return [
    "/" => [
        "method" => "get",
        "action" => UserController::index(),
    ]
];
