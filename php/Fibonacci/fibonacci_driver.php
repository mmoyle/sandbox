<?php

require_once 'Fibonacci.php';

$fib = new \Fibonacci\Fibonacci();

for ($i = 0; $i < 15; $i++)
{
    echo $fib->fib($i) . ', ';
}

echo "\n";

$a = $fib->genFibArray(15);
foreach ( $a as $v)
{
    echo $v . ', ';
}