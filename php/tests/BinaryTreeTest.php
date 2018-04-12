<?php

namespace  BinarySearch;

require_once '../BinarySearch/BinaryTree.php';

use PHPUnit\Framework\TestCase;

class BinaryTreeTest extends TestCase
{

    /** @var BinaryTree */
    private $binaryTree;

    public function setUp()
    {
        $this->binaryTree = new BinaryTree();
    }

    public function testSearch()
    {
        $this->binaryTree->insertValue(10);
        $result = $this->binaryTree->search(10);
        $this->assertTrue($result);

    }
}
