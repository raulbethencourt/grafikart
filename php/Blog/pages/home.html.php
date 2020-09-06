<?php use App\Table\Article; ?>
<?php foreach ($db->query('SELECT * FROM articles', Article::class) as $post): ?>
    <?php var_dump($post); ?>
    <h2><a href="<?php $post->getURL ?>"><?= $post->titre ?></a></h2>
    <p><?= $post->getExtrait ?></p>
<?php endforeach; ?>