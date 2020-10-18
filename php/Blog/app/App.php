<?php

namespace App;

use App\DataBase;

class App
{
    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = '127.0.0.1';

    private static $database;

    public static function getDb()
    {
        if (self::$database === null) {
            self::$database = new DataBase(self::DB_NAME, self::DB_USER, self::DB_PASS,
                self::DB_HOST);
        }

        return self::$database;
    }

    /**
     * @param  mixed  $database
     */
    public static function setDatabase($database): void
    {
        self::$database = $database;
    }
}