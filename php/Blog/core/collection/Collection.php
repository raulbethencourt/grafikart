<?php

namespace Core\Collection;

class Collection
{
    private $items;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function get($key)
    {
        return $this->items[$key];
    }
}

