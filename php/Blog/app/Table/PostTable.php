<?php


namespace App\Table;

use Core\Table\Table;

class PostTable extends Table
{
    public function last()
    {
        return $this->query(
            "
            SELECT  a.id, a.titre, a.contenu, a.date, c.title as categorie
            FROM articles AS a 
            LEFT JOIN categories AS c ON categories_id = c.id
            ORDER BY a.date DESC 
        "
        );
    }
}