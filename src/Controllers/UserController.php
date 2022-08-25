<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public static function index()
    {
        return function () {
            echo json_encode(User::list());
        };
    }
}
