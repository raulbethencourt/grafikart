<?php

namespace App\Controller\Admin;

use App;
use App\Controller\AppController as Controller;
use Core\Auth\DBAuth;

class AppController extends Controller
{
    protected $template = 'base';

    public function __construct()
    {
        parent::__construct();
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if (!$auth->logged()) {
            $this->forbidden();
        }
        $this->viewPath = ROOT . '/app/Views/';
    }

    protected function loadModel($model_name)
    {
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
}
