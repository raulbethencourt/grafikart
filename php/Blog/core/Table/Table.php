<?php


namespace Core\Table;


use Core\Database\Database;

class Table
{
    protected $table;
    protected DataBase $db;

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

    protected function query($statement, $attributes = null, $one = false)
    {
        if ($attributes) {
            $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }
}