<?php

namespace App\Controller;

use App;
use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use App\Controller\AppController;

class UsersController extends AppController
{
    public function login()
    {
        $errors = false;
        if (!empty($_POST)) {
            $auth = new DBAuth(App::getInstance()->getDb());
            if ($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $variables = compact('form', 'errors');

        $this->render('users.login', $variables);
    }
}
