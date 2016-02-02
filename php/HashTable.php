<?php

class HashTable {
	
	private $_tableSize = 101;
	private $_table = array(); 
		
	public function addItem($key, $item) {
		
		$index = $this->_hashIndex($key);
		$this->_table[$index] = $item;
						
	}
	
	
	
	public function getItem($key) {
		$index = $this->_hashIndex($key);
		return $this->_table[$index];
		
	}

	private function _hashIndex($key) {
		
		$hashCode = $this->_hashCode($key);
// 		echo $hashCode . "\n";		
		return $hashCode % $this->_tableSize; 
		
	}
	
	private function _hashCode($key) {
		$hash = 0;
		$strLength = strlen($key);
		for ($i = 0; $i < $strLength; $i++){
			$hash = 33 * $hash + ord($key[$i]);
		}
		return $hash; 
	}
		
}