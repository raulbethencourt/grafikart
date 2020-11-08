<?php


namespace App\Table;

use Core\Table\Table;

class CategoryTable extends Table
{
    protected $table = 'categories';

    public function all()
    {
        return $this->query(
            "
        SELECT * 
        FROM categories
        "
        );
    }
}