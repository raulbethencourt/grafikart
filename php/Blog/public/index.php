<?php

use App\App;
use App\Autoloader as AutoloaderAlias;

require '../app/Autoloader.php';
AutoloaderAlias::register();

$app = App::getInstance();

$posts = $app->getTable('posts');

var_dump($posts->all());