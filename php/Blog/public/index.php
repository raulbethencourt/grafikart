<?php

use App\Config;

require '../app/Autoloader.php';
App\Autoloader::register();

$config = Config::getInstance();
var_dump($config->get('db_user'));