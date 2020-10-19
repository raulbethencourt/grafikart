<?php

use App\DataBase;

require '../app/Autoloader.php';

App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'portafolio';
}

ob_start();
if ($p === 'portafolio') {
    require '../pages/home.html.php';
} elseif ($p === 'article') {
    require '../pages/single.html.php';
} elseif ($p === 'categories') {
    require '../pages/category.html.php';
}
$content = ob_get_clean();

require '../pages/templates/base.html.php';