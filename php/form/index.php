<?php

use \form\HTML\BootstrapForm;
use \form\Autoloading;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="form">
    <meta name="keywords" content="form">
    <meta name="author" content="Raul Bethencourt">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    require 'Class/Autoloading.php';
    Autoloading::register();

    $form = new BootstrapForm($_POST);
    ?>

    <form action="#" method="post">
        <?php
        echo $form->input('username');
        echo $form->input('password');
        echo $form->submit();
        ?>
    </form>
</body>

</html>