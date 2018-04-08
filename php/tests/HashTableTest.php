<?php

require_once '../HashTable/HashTable.php';

use PHPUnit\Framework\TestCase;
use HashTable\HashTable;

class HashTableTest extends TestCase
{

    /**
     * @var HashTable
     */
    private $hashTable;

    public function setUp()
    {
        $this->hashTable = new \HashTable\HashTable();
    }

    public function testInsertItem()
    {
        $this->hashTable->addItem(10, 'myItem');
    }

    public function testGetItem()
    {

        $this->hashTable->addItem(10, 'myItem');
        $result = $this->hashTable->getItem(10);
        $this->assertEquals('myItem', $result);
    }
}
