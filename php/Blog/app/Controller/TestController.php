<?php

namespace App\Controller;

use Core\Database\QueryBuilder;
use App\Controller\AppController;

class TestController extends AppController
{
    public function index()
    {
        $query = new QueryBuilder();
        echo $query
            ->select('id', 'titre', 'contenu')
            ->from('articles', 'Post')
            ->where('Post.category_id = 1')
            ->where('Post.date > NOW()');
    }
}
