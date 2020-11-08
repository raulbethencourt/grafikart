<?php

use Core\HTML\BootstrapForm;

$categoryTable = App::getInstance()->getTable('category');

if (!empty($_POST)) {
    $result = $categoryTable->update(
        $_GET['id'],
        [
            'title' => $_POST['title']
        ]
    );

    if ($result) {
?>
        <div class="alert alert-success">
            La categorie a bien été modifié
        </div>
<?php
    }
}
$category = $categoryTable->find($_GET['id']);
$form = new BootstrapForm($category);
?>

<form method="post">
    <?= $form->input('title', 'Titre de la categorie') ?>
    <button type="submit" class="btn btn-secondary">Suvgarder</button>
</form>