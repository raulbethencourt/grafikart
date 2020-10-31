<?php

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT . "/app/App.php";
App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

// Auth
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if (!$auth->logged()) {
    $app->forbidden();
}

ob_start();

switch ($page) {
    case 'posts.edit':
        require ROOT . '/pages/admin/posts/edit.html.php';
        break;
    case 'posts.show':
        require ROOT . '/pages/admin/posts/show.html.php';
        break;
    case 'posts.add':
        require ROOT . '/pages/admin/posts/add.html.php';
        break;
    default:
        require ROOT . '/pages/admin/posts/index.html.php';
        break;
}

$content = ob_get_clean();

require ROOT . '/pages/templates/base.html.php';
