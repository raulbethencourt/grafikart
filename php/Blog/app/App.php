<?php

use App\Autoloader;
use Core\Autoloader as CoreAutoloader;
use Core\Config;
use Core\Database\Database;

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

    public static function load(): void
    {
        session_start();
        require ROOT."/app/Autoloader.php";
        Autoloader::register();
        require ROOT."/core/Autoloader.php";
        CoreAutoloader::register();
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

    public function getDb(): Database
    {
        if (is_null($this->db_instance)) {
            $config = Config::getInstance(ROOT."/config/config.php");
            $this->db_instance = new Database(
                $config->get('db_name'), $config->get('db_user'),
                $config->get('db_pass'), $config->get('db_host')
            );
        }

        return $this->db_instance;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}