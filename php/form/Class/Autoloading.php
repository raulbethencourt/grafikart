<?php

namespace form;

/**
 * class Autoloading
 * Allows to load every single class to the index
 */
class Autoloading
{
    /**
     * autoload() than le fichier index
     */
    static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    /**
     * @param [string] $class_name Allows to generates each require of each class
     * @return string
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__.'\\' ) === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require 'Class/' . $class . '.php';
        }        
    }
}
