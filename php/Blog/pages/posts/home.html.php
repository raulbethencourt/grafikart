<?php

use Core\Collection\Collection;

$posts = App::getInstance()->getTable('post')->all();

$test = new Collection([
    ['name' => 'Jean', 'note' => 20, 'nickname' => 'test'],
    ['name' => 'Doty', 'note' => 30, 'nickname' => 'test2'],
    ['name' => 'Paul', 'note' => 10, 'nickname' => 'test3'],
]);

var_dump($test->__extract('note')->__join(', '));
exit();

?>

<div class="row">
    <div class="col-sm-8">
        <?php
        foreach (App::getInstance()->getTable('post')->last() as $post) : ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre ?></a></h2>

            <p><em><?= $post->categorie ?></em></p>

            <p><?= $post->extrait ?></p>

        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach (App::getInstance()->getTable('category')->all() as $category) : ?>
                <li><a href="<?= $category->url ?>"><?= $category->title ?></a></li>
            <?php endforeach ?>
        </ul>

    </div>
</div>