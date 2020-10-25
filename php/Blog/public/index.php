<?php
define('ROOT', dirname(__DIR__));
require ROOT."/app/App.php";
App::load();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

ob_start();
if ($page === 'home') {
    require ROOT.'/pages/articles/home.html.php';
}
$content = ob_get_clean();

require ROOT.'/pages/templates/base.html.php';


