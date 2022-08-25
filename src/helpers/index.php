<?php

if (!function_exists("env")) {
    function env(string $key, string $default = null)
    {
        if ($value = $_ENV[$key])
            return $value;
        return $default;
    }
}
