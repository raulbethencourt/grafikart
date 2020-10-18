<?php


namespace App\Table;


use App\App;

class Categorie extends Table
{
    public function getUrl(): string
    {
        return 'index.php?p=categories&id='.$this->id;
    }
}