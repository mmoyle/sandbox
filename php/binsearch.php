<?php

require_once("BinTree.php");

$binTree = new BinTree();

$binTree->insert(5);
$binTree->insert(11);

$binTree->insert(3);
$binTree->insert(1);
$binTree->insert(7);

$binTree->showValuesPrefix($binTree->rootNode);
echo "\n";
$binTree->showValuesInfix($binTree->rootNode);
echo "\n";

echo $binTree->search($binTree->rootNode, 3);
echo "\n";
echo $binTree->search($binTree->rootNode,14);
echo "\n";

