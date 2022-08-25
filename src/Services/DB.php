<?php

namespace App\Services;

use PDO;

class DB
{
    public static function  connection(): PDO
    {
        $config = require __DIR__ . "/../config/database.php";
        $pdo = new PDO(
            'mysql:host=' . $config["host"] . ';dbname=' . $config["database"],
            $config["user"]
        );
        return $pdo;
    }
}
