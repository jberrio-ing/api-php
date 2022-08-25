<?php

use App\routes\Router;
use Symfony\Component\Dotenv\Dotenv;

require_once '../vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/../.env');

Router::init();
