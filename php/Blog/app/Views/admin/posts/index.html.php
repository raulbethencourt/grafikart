<?php if($success): ?>
    <div class="alert alert-success">
        L'article a bien été <?= $message ?>
    </div>
<?php endif ?>

<h1>Administrer les articles</h1>

<p>
    <a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
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
        <?php foreach ($posts as $post) : ?>
            <tr>
                <td scope="row"><?= $post->id ?></td>
                <td><?= $post->titre ?></td>
                <td>
                    <a href="?p=admin.posts.edit&id=<?= $post->id ?>" class="btn btn-secondary">Editer</a>
                    <form action="?p=admin.posts.delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


