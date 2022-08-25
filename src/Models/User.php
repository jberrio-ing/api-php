<?php

namespace App\Models;

use App\Services\DB;
use PDO;

class User extends DB
{
    public static function list()
    {
        $gsent = self::connection()->prepare("SELECT * FROM users;");
        $gsent->execute();
        return $gsent->fetchAll(PDO::FETCH_ASSOC);
    }
}
