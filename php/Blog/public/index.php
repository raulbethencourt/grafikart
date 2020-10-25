<?php
define('ROOT', dirname(__DIR__));
require ROOT."/app/App.php";
App::load();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

ob_start();

switch ($page) {
    case 'posts.category':
        require ROOT.'/pages/posts/category.html.php';
        break;
    case 'posts.show':
        require ROOT.'/pages/posts/show.html.php';
        break;
    default:
        require ROOT.'/pages/posts/home.html.php';
        break;
}

$content = ob_get_clean();

require ROOT.'/pages/templates/base.html.php';


