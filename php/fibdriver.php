<?php
require_once( 'Fib.php');

$fib = new Fib;

$count = 10;
echo "running recursive Fibonacci\n";
for ( $i =0; $i <= $count; $i++) { 
	echo $fib->fib($i) . ","; 
}

echo "\nRunning Iterative Fibonacci\n";
$fib->fibIter($count);

echo "\n";
