<form method="post" id="edit-form">
    <?= $form->input('titre', 'Titre de l\'article') ?>
    <?= $form->textArea('contenu', 'Contenu', 10, 50, 'edit-form') ?>
    <?= $form->select('categories_id', 'Categorie', $categories) ?>
    <button class="btn btn-secondary" type="submit">Suvgarder</button>
</form>