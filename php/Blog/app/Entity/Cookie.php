<?php

namespace App\Entity;

use Core\Interfaces\SessionInterface;

class Cookie implements SessionInterface
{
    /**
     * Get a data by key
     * @param string $key
     * @return  mixed
     */
    public function get($key)
    {
        return isset($_COOKIE[$key]) ? unserialize($_COOKIE[$key]) : null;
    }

    /**
     * Assigns a value to the specified data
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        setcookie($key, serialize($value));
    }

    /**
     * Delete a value from storage
     * @param string $key
     * @return mixed
     */
    public function delete($key)
    {
        if (isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]);
            setcookie($key, '', time() - 3600);
        }
    }
}
