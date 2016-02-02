<?php

/**
 * 
 * @author mmoyle
 * use an array in the node
 * http://eternallyconfuzzled.com/tuts/datastructures/jsw_tut_bst1.aspx
 */

class Node {
	public $value;
	// two element array 0,1 for left and right
	public $node = array(); 
	
	public function __construct($value) {
		$this->value = $value; 
	}
	
}

class BinTree {
	
	public $rootNode; 
	
	public function insert($value) {
		
		$this->_insertR(&$this->rootNode, $value);
		return 1; 							
				
	}
	
	private function _insertR($node, $value) {
						
		if  (! $node ) {
			$node = new Node($value);

		} else {
			/**
			 * if $node->value is less than $value $value belongs on the right (true/1, the elt of the array)
			 * else false/0 is the left side  
			 */
			$direction = $node->value < $value; 
			$this->_insertR(&$node->node[$direction], $value);			
		}

		return 1; 
				
	}
			
	public function search($node, $value) {
		if ( ! $node ) {
			return 0;
		}
echo "searching for $value\n";		
echo "node value:" . $node->value . "\n"; 
		if ($value == $node->value) {
			echo "found $value\n";
			return 1;
			
		} else {
			$direction = $node->value < $value;
			$this->search($node->node[$direction], $value);
		}
		
	}
		

	
	public function showValuesPrefix($node) {
	
		if (! $node) {
			return;
		}
	
		$this->showValuesPrefix($node->node[0]);
		$this->showValuesPrefix($node->node[1]);
		echo $node->value . ",";
	
	}

	public function showValuesInfix($node) {
	
		if (! $node) {
			return;
		}
	
		echo $node->value . ",";
		$this->showValuesPrefix($node->node[0]);
		$this->showValuesPrefix($node->node[1]);
	
	}
	
		
}