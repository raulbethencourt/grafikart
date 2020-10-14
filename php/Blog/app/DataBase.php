<?php

namespace App;

use PDO;

class DataBase
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = '127.0.0.1')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(): PDO
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }

    public function query($statement, $class_name): array
    {
        $q = $this->getPDO()->query($statement);
        $data = $q->fetchAll(PDO::FETCH_CLASS, $class_name);

        return $data;
    }

    /**
     * @param $statement
     * @param $attributes
     * @param $class_name
     * @param  bool  $one
     * @return object
     */
    public function prepare($statement, $attributes, $class_name, $one = false): object
    {
        $query = $this->getPDO()->prepare($statement);
        $query->execute($attributes);
        $query->setFetchMode(PDO::FETCH_CLASS, $class_name);

        if ($one) {
            $data = $query->fetch();
        } else {
            $data = $query->fetchAll();
        }

        return $data;
    }
}