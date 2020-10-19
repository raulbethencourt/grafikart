<?php


namespace App\Table;

use App\App;

abstract class Table
{
    protected static $table;

    public static function find($id)
    {
        return self::query(
            sprintf(
                "
            SELECT *
            FROM %s
            WHERE id = ?",
                static::$table
            ),
            [$id],
            true
        );
    }

    public static function query($statement, $attributes = null, $one = false)
    {
        if ($attributes) {
            return App::getDb()->prepare($statement, $attributes, static::class, $one);
        }
        return App::getDb()->query($statement, static::class, $one);
    }

    public static function all(): array
    {
        return self::query(
            sprintf(
                "
            SELECT *
            FROM %s",
                static::$table
            )
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