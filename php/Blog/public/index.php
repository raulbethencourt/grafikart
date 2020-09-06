<?php

use App\DataBase;

require '../app/Autoloader.php';

App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'portafolio';
}

//DataBase connection
$db = new DataBase('blog');

ob_start();
if ($p === 'portafolio') {
    require '../pages/home.html.php';
} elseif ($p === 'single') {
    require '../pages/single.html.php';
}
$content = ob_get_clean();

require '../pages/templates/base.html.php';