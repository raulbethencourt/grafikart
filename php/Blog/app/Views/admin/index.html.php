<?php
$posts = App::getInstance()->getTable('post')->all();
$categories = App::getInstance()->getTable('category')->all();
?>

<h1>Administrer les articles</h1>

<p>
    <a href="?p=posts.add" class="btn btn-success">Ajouter</a>
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
                    <a href="?p=posts.edit&id=<?= $post->id ?>" class="btn btn-secondary">Editer</a>
                    <form action="?p=posts.delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $post->id ?>">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h1>Administrer les categories</h1>

<p>
    <a href="?p=categories.add" class="btn btn-success">Ajouter</a>
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
                    <a href="?p=categories.edit&id=<?= $category->id ?>" class="btn btn-secondary">Editer</a>

                    <form action="?p=categories.delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $category->id ?>">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>