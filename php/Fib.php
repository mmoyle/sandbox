<?php

class Fib {

	function __construct() {
		
	}
	
	public $values = array();

	//return n'th fib
	public function fib($count) {

		if ( $count < 2) {
			return 1; 
		}
				
		$val = ($this->fib($count -2) + $this->fib($count-1) );
		return $val; 
		
	}

	public function fibIter($count) {

		$n1 = 1;
		$n2 = 1; 
		$curVal;

		for ($i =0; $i <= $count; $i++) {
			if ($i < 2) {
				echo 1 . ",";
				continue; 
			}
			
			$curVal = $n1 + $n2; 
			echo $curVal . ","; 
			$n1 = $n2; 
			$n2 = $curVal; 
			
		}
		
	}

}