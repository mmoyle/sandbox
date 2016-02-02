<?php

function echoTree($n) {
	echoTreeR($n, $n);	
}

function echoTreeR($n, $maxN) {
	if ($n < 1) {
		return;
	}
	
	echoTreeR($n-1, $maxN  );	
	echoWS($maxN - $n );

	for ($i = 0; $i < (2*$n-1); $i++) {
		echo "*";
	}
	
	echoWS($maxN - $n );	
	echo "\n";
	
}

function echoWS($numWS) {

	for ($i =0; $i < $numWS; $i++ ) {
	echo " ";
	}	
}

echoTree(4);