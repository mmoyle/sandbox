<?php

require_once("HashTable.php");

$h = new HashTable();

$h->addItem("foo", "bar");
$h->addItem("chicken", "coop");
$h->addItem("oof", "rab");

echo $h->getItem("chicken") . "\n";
echo $h->getItem("foo") . "\n";
echo $h->getItem("oof") . "\n";