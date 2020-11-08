<?php


namespace App\Table;

use App\Entity\PostEntity;
use Core\Table\Table;

class PostTable extends Table
{
    protected $table = 'articles';

    /**
     * Recovery the last posts
     * @return array
     */
    public function last(): array
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

    /**
     * Recovery the last posts from category
     * @param $category_id int
     * @return array|mixed
     */
    public function lastByCategory(int $category_id)
    {
        return $this->query(
            "
            SELECT  a.id, a.titre, a.contenu, a.date, c.title as categorie
            FROM articles AS a 
            LEFT JOIN categories AS c ON categories_id = c.id
            WHERE a.categories_id = ?
            ORDER BY a.date DESC
        ",
            [$category_id]
        );
    }

    /**
     * Recovery one post with associated category
     * @param $id
     * @return PostEntity
     */
    public function findWithCategory($id): PostEntity
    {
        return $this->query(
            "
            SELECT  a.id, a.titre, a.contenu, a.date, c.title as categorie
            FROM articles AS a 
            LEFT JOIN categories AS c ON categories_id = c.id
            WHERE a.id = ?
        ",
            [$id],
            true
        );
    }
}