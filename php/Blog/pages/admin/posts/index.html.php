<?php
$posts = App::getInstance()->getTable('post')->all();
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
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>