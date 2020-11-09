<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App\Controller\Admin\AppController;


class CategoriesController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->LoadModel('Category');
    }

    public function index($success = false, $message = null)
    {
        $categories = $this->Category->all();
        $variables = compact('categories', 'success', 'message');

        $this->render('admin.categories.index', $variables);
    }

    public function add()
    {
        $success = false;
        if (!empty($_POST)) {
            $result = $this->Category->create([
                'title' => $_POST['title'],
            ]);

            if ($result) {
                $success = true;
                return $this->index($success, 'créée');
            }
        }
        $form = new BootstrapForm();

        $variables = compact('form');

        $this->render('admin.categories.edit', $variables);
    }

    public function edit()
    {
        $success = false;
        if (!empty($_POST)) {
            $result = $this->Category->update(
                $_GET['id'],
                [
                    'title' => $_POST['title'],
                ]
            );

            if ($result) {
                $success = true;
                return $this->index($success, 'edité');
            }
        }
        $category = $this->Category->find($_GET['id']);
        $form = new BootstrapForm($category);

        $variables = compact('category', 'form');

        $this->render('admin.categories.edit', $variables);
    }

    public function delete()
    {
        $success = false;
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);

            if ($result) {
                $success = true;
                return $this->index($success, 'suprimée');
            }
        }
    }
}
