<?php

namespace HashTable;


class HashTable
{
    const TABLE_SIZE = 1009;

    private $storage = [];

    public function getItem(int $key)
    {
        $index = $this->hash($key);
        $item = $this->storage[$index] ?? null;
        return $item;
    }

    public function addItem(int $key, $item)
    {
        $index = $this->hash($key);
        $this->storage[$index] = $item;
        return $this;
    }

    private function hash(int $key) {
        $index = $key % self::TABLE_SIZE;
        return $index;
    }


}