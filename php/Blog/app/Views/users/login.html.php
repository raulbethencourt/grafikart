<?php

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;

if (!empty($_POST)) {
    $auth = new DBAuth(App::getInstance()->getDb());
    if ($auth->login($_POST['username'], $_POST['password'])) {
        header('Location: admin.php');
    } else {
?>

        <div class="alert alert-danger">
            Identifiants incorrectes
        </div>

<?php
    }
}

$form = new BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('username', 'Pseudo') ?>
    <?= $form->input('password', 'Mot de pass', ['type' => 'password']) ?>
    <button class="btn btn-secondary">Envoyer</button>
</form>