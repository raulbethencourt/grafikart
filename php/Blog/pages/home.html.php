<?php use App\Table\Article; ?>
<?php foreach ($db->query('SELECT * FROM articles', Article::class) as $post): ?>
    <h2><a href="<?= $post->url ?>"><?= $post->titre ?></a></h2>
    <?= $post->extrait ?>
<?php endforeach; ?>