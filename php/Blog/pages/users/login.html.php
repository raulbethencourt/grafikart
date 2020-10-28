<?php

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;

if (!empty($_POST)) {
    $auth = new DBAuth(App::getInstance()->getDb());
    $auth->login($_POST['username'], $_POST['password']);
}

$form = new BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('username', 'Pseudo') ?>
    <?= $form->input('password', 'Mot de pass', ['type' => 'password']) ?>
    <button class="btn btn-secondary">Envoyer</button>
</form>