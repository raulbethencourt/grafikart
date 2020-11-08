<?php
$app = App::getInstance();

$category = $app->getTable('category');

if ($category === false) {
    $app->notFound();
}

$posts = $app->getTable('post')->lastByCategory($_GET['id']);
$categories = $category->all();
?>

<h1><?= $category->find($_GET['id'])->title ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php
        foreach ($posts as $post): ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre ?></a></h2>

            <p><em><?= $post->contenu ?></em></p>

            <p><?= $post->extrait ?></p>

        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach ($categories as $categorie): ?>
                <li><a href="<?= $categorie->url ?>"><?= $categorie->title ?></a></li>
            <?php endforeach ?>
        </ul>

    </div>
</div>


