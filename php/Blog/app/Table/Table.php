<?php


namespace App\Table;

use App\App;

abstract class Table
{
    protected static $table;

    private static function getTable()
    {
        if (static::$table === null) {
            $class_name = explode('\\', static::class);
            static::$table = strtolower(end($class_name)).'s';
        }

        return static::$table;
    }

    public static function all()
    {
        return App::getDb()->query(
            sprintf(
                "
            SELECT *
            FROM %s",
                static::getTable()
            ),
            static::class
        );
    }

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();

        return $this->$key;
    }
}