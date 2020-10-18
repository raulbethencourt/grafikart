<?php

namespace App\Table;

use App\App;

class Article extends Table
{
    public static function getLast(): array
    {
        return App::getDb()->query(
            "
            SELECT a.id, a.titre, a.contenu, categories.title as categorie 
            FROM articles as a
                LEFT JOIN categories 
                ON categories_id = categories.id
                ",
            __CLASS__
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