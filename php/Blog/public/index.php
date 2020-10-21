<?php

use App\App;
use App\Autoloader as AutoloaderAlias;

require '../app/Autoloader.php';
AutoloaderAlias::register();
$app = App::getInstance();

var_dump($app->getTable('posts'));