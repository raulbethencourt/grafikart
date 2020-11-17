<?php

namespace Core\Interfaces;

/**
 * My first home made interface
 */
interface SessionInterface
{

    /**
     * Get a value from storage
     *
     * @param string $key
     * @return mixed
     */
    public function get($key);

    /**
     * Set a value into the storage
     *
     * @param string $key
     * @param mixed $val
     * @return mixed
     */
    public function set($key, $val);

    /**
     * Delete a value from storage
     *
     * @param string $key
     * @return mixed
     */
    public function delete($key);

}
