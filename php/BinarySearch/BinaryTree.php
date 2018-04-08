<?php

namespace BinarySearch;

require_once 'Node.php';

class BinaryTree
{

    private $rootNode;
    public function insertValue(int $value)
    {
        $newNode = new Node($value);

        if ($this->rootNode == null)
        {
            $this->rootNode = $newNode;
        } else {
            $this->insertFromParent($this->rootNode, $newNode);
        }
    }

    private function insertFromParent(Node $parentNode, Node $newNode)
    {
        if ( $newNode->value < $parentNode->value) {
            if ($parentNode->leftNode != null)
            {
                $this->insertFromParent($parentNode->leftNode, $newNode);
            } else {
                $parentNode->leftNode = $newNode;
            }
        } else {
            if ($parentNode->rightNode != null)
            {
                $this->insertFromParent($parentNode->rightNode, $newNode);
            } else {
                $parentNode->rightNode = $newNode;
            }
        }
    }


    public function search(int $value) : bool
    {
        return $this->searchWithNode($this->rootNode, $value);
    }

    private function searchWithNode(Node $node, $value) : bool
    {
        if ($node == null)
        {
            return false;
        }

        if ($node->value == $value)
        {
            return true;
        };

        if ($value < $node->value)
        {
            return $this->searchWithNode($node->leftNode, $node);
        }

        return $this->searchWithNode($node->rightNode, $node);
    }

}