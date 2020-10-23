<?php


namespace App\Table;


use App\DataBase;

class Table
{
    protected $table;
    private DataBase $db;

    public function __construct(DataBase $db)
    {
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
        $this->db = $db;
    }

    public function all()
    {
        return $this->db->query('SELECT * FROM articles');
    }
}