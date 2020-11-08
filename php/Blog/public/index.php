<?php

use App\Controller\PostController;
use App\Controller\UserController;

define('ROOT', dirname(__DIR__));
require ROOT . "/app/App.php";
App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'posts.category':
        $controller = new PostController();
        $controller->category();
        break;
    case 'posts.show':
        $controller = new PostController();
        $controller->show();
        break;
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;
    default:
        $controller = new PostController();
        $controller->index();
        break;
}

