<?php


namespace BinarySearch;

class Node {
    /** @var integer */
    public $value;
    /** @var Node */
    public $rightNode;
    /** @var Node */
    public $leftNode;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}