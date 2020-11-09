<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->LoadModel('Category');
    }

    public function index()
    {
        $posts = $this->Post->last();
        $categories = $this->Category->all();
        $variables = compact('posts', 'categories');

        $this->render('posts.index', $variables);
    }

    public function category()
    {
        $category = $this->Category->find($_GET['id']);

        if ($category === false) {
            $this->notFound();
        }

        $posts = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $variables = compact('posts', 'categories', 'category');

        $this->render('posts.category', $variables);
    }

    public function show()
    {
        $post = $this->Post->findWithCategory($_GET['id']);

        if ($post === false) {
            $this->notFound();
        }

        $variables = compact('post');

        $this->render('posts.show', $variables);
    }
}
