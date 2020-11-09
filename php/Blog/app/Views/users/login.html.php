<?php if ($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrectes
    </div>
<?php endif; ?>


<form method="post">
    <?= $form->input('username', 'Pseudo') ?>
    <?= $form->input('password', 'Mot de pass', ['type' => 'password']) ?>
    <button class="btn btn-secondary">Envoyer</button>
</form>