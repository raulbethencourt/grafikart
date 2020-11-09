<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App\Controller\Admin\AppController;

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->LoadModel('Category');
    }

    public function index($success = false, $message = null)
    {
        $posts = $this->Post->all();
        $variables = compact('posts', 'success', 'message');

        $this->render('admin.posts.index', $variables);
    }

    public function edit()
    {
        $success = false;
        if (!empty($_POST)) {
            $result = $this->Post->update(
                $_GET['id'],
                [
                    'titre' => $_POST['titre'],
                    'contenu' => $_POST['contenu'],
                    'categories_id' => $_POST['categories_id']
                ]
            );

            if ($result) {
                $success = true;
                return $this->index($success, 'edité');
            }
        }
        $post = $this->Post->find($_GET['id']);
        $categories = $this->Category->extract('id', 'title');
        $form = new BootstrapForm($post);

        $variables = compact('post', 'categories', 'form');

        $this->render('admin.posts.edit', $variables);
    }

    public function add()
    {
        $success = false;
        if (!empty($_POST)) {
            $result = $this->Post->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'categories_id' => $_POST['categories_id'],
                'date' => date("Y-m-d")
            ]);

            if ($result) {
                $success = true;
                return $this->index($success, 'créée');
            }
        }
        $categories = $this->Category->extract('id', 'title');
        $form = new BootstrapForm();
        
        $variables = compact('categories', 'form');
        
        $this->render('admin.posts.edit', $variables);
    }

    public function delete()
    {
        $success = false;
        if (!empty($_POST)) {
            $result = $this->Post->delete($_POST['id']);
            
            if ($result) {
                $success = true;
                return $this->index($success, 'suprimée');
            }
        }
    }
}
