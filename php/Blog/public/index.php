<?php

require '../app/Autoloader.php';

App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if ($p === 'home') {
    require '../pages/home.html.php';
} elseif ($p === 'single'){
    require '../pages/single.html.php';
}
$content = ob_get_clean();

require '../pages/templates/base.html.php';