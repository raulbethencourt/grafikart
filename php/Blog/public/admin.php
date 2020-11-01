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
    case 'categories.edit':
        require ROOT . '/pages/admin/categories/edit.html.php';
        break;
    case 'categories.show':
        require ROOT . '/pages/admin/categories/show.html.php';
        break;
    case 'categories.add':
        require ROOT . '/pages/admin/categories/add.html.php';
        break;
    case 'categories.delete':
        require ROOT . '/pages/admin/categories/delete.html.php';
        break;
    case 'posts.edit':
        require ROOT . '/pages/admin/posts/edit.html.php';
        break;
    case 'posts.show':
        require ROOT . '/pages/admin/posts/show.html.php';
        break;
    case 'posts.add':
        require ROOT . '/pages/admin/posts/add.html.php';
        break;
    case 'posts.delete':
        require ROOT . '/pages/admin/posts/delete.html.php';
        break;
    default:
        require ROOT . '/pages/admin/index.html.php';
        break;
}

$content = ob_get_clean();

require ROOT . '/pages/templates/base.html.php';
