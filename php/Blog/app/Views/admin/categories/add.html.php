<?php

use Core\HTML\BootstrapForm;

$categoryTable = App::getInstance()->getTable('category');

if (!empty($_POST)) {
    $result = $categoryTable->create([
        'title' => $_POST['title']
    ]);
    if ($result) {
        header('Location: admin.php');
    }
}

$form = new BootstrapForm();
?>

<h1>Ajouter une categorie</h1>

<form action="?p=categories.add" method="post">
    <?= $form->input('title', 'Titre') ?>
    <button type="submit" class="btn btn-secondary">Ajouter</button>
</form>