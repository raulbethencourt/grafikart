<?php

use Core\HTML\BootstrapForm;

$postTable = App::getInstance()->getTable('post');

if (!empty($_POST)) {
    $result = $postTable->create([
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'categories_id' => $_POST['categories_id']
    ]);

    if ($result) {
?>
        <div class="alert alert-success">
            L'article a bien été ajouté
        </div>
<?php
    }
}
$categories = App::getInstance()->getTable('category')->extract('id', 'title');
$form = new BootstrapForm();
?>

<form method="post" id="edit-form">
    <?= $form->input('titre', 'Titre de l\'article') ?>
    <?= $form->textArea('contenu', 'Contenu', 10, 50, 'edit-form') ?>
    <?= $form->select('categories_id', 'Categorie', $categories) ?>
    <button class="btn btn-secondary">Suvgarder</button>
</form>