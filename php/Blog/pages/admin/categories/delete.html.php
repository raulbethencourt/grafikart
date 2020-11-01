<?php

$categoryTable = App::getInstance()->getTable('category');

if (!empty($_POST)) {
    $result = $categoryTable->delete($_POST['id']);

    if ($result) {
        header('Location: admin.php');
    }
}
