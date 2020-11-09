<?php if($success): ?>
    <div class="alert alert-success">
        La categorie a bien été <?= $message ?>
    </div>
<?php endif ?>

<h1>Administrer les categories</h1>

<p>
    <a href="?p=admin.categories.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td scope="row"><?= $category->id ?></td>
                <td><?= $category->title ?></td>
                <td>
                    <a href="?p=admin.categories.edit&id=<?= $category->id ?>" class="btn btn-secondary">Editer</a>

                    <form action="?p=admin.categories.delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>