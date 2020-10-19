<?php

namespace App;

class App
{
    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = '127.0.0.1';

    private static $database;
    private static $title = "My site";

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

    public static function notFound(): void
    {
        header("HTTP/1.0 404 Not Found");
        header("Location: index.php?p=404");
    }

    /**
     * @return mixed
     */
    public static function getTitle()
    {
        return self::$title;
    }

    /**
     * @param  mixed  $title
     */
    public static function setTitle($title): void
    {
        self::$title = $title;
    }
}