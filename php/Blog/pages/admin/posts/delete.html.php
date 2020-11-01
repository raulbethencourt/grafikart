<?php

$postTable = App::getInstance()->getTable('post');

if (!empty($_POST)) {
    $result = $postTable->delete($_POST['id']);

    if ($result) {
        header('Location: admin.php');
    }
}
