<?php

namespace App\Table;

class Article extends Table
{
    protected static $table = 'articles';

    public static function find($id)
    {
        return self::query(
            "
            SELECT a.id, a.titre, a.contenu, categories.title as categorie 
            FROM articles as a
            LEFT JOIN categories ON categories_id = categories.id
            WHERE a.id = ?",
            [$id],
            true
        );
    }

    public static function getLast(): array
    {
        return self::query(
            "
            SELECT a.id, a.titre, a.contenu, categories.title as categorie 
            FROM articles as a
            LEFT JOIN categories ON categories_id = categories.id
            ORDER BY a.date DESC  
            "
        );
    }

    public static function lastByCategory($category_id)
    {
        return self::query(
            "
            SELECT a.id, a.titre, a.contenu, categories.title as categorie 
            FROM articles as a
                LEFT JOIN categories 
                ON categories_id = categories.id
            WHERE categories_id = ? 
            ORDER BY a.date DESC  
            ",
            [$category_id]
        );
    }

    public function getUrl(): string
    {
        return 'index.php?p=article&id='.$this->id;
    }

    public function getExtrait(): string
    {
        $html = '<p>'.substr($this->contenu, 0, 150).'...</p>';
        $html .= '<p><a href="'.$this->getURL().'">Voir la suite</a></p>';

        return $html;
    }
}