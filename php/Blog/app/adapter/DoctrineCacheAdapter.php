<?php
namespace App\adapter;

use Core\Interfaces\CacheInterface;
use Doctrine\Common\Cache\Cache;

/**
 * This class is the Adapter of design pattern Adapter
 */
class DoctrineCacheAdapter implements CacheInterface
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function get($key)
    {
        return $this->cache->fetch($key);
    }

    public function has($key)
    {
        return $this->cache->contains($key);
    }

    public function set($key, $value, $expiration = 3600)
    {
        return $this->cache->save($key, $value, $expiration);

    }
}

