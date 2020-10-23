<?php

namespace App;

class App
{
    public $title = 'My site';
    private $db_instance;
    private static $_instance;

    public static function getInstance(): App
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getTable($name)
    {
        $class_name = 'App\\Table\\'.ucfirst($name).'Table';

        return new $class_name($this->getDb());
    }

    public function getDb(): DataBase
    {
        if (is_null($this->db_instance)) {
            $config = Config::getInstance();
            $this->db_instance = new DataBase($config->get('db_name'), $config->get('db_user'),
                $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }
}