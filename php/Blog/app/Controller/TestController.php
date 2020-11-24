<?php

namespace App\Controller;

use Core\Database\QueryBuilder;
use App\Controller\AppController;
use Core\Interfaces\CacheInterface;

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

    // Function to test design pattern Adapter
    public function sayHello(CacheInterface $cache)
    {
        if ($cache->has('hello')) {
            return $cache->get('hello');
        } else {
            sleep(4);
            $content = 'good morning';
            $cache->set('hello', $content);
            return $content;
        }
    }
}
