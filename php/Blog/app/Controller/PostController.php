<?php

namespace App\Controller;

use App;
use Core\Controller\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = App::getInstance()->getTable('post')->last();
        $categories = App::getInstance()->getTable('category')->all();
        $this->render('posts.index');

        var_dump($posts,$categories);die;
    }

    public function category()
    {
    }

    public function show()
    {
        
    }
}
