<?php

function add($a, $b){
    error($a,$b);
    return $a + $b;
}

function subtract($a, $b){
	error($a,$b);
    return $a - $b;
}

function multiply($a, $b){
	error($a,$b);
    return $a * $b;
    
}

function divide($a, $b){
    
    	if($b == 0){
    		return "ERROR: Can not divide by 0";
    	}else{
        error($a,$b);
        return $a / $b;
	    }
    
}
function modulus($a, $b){
    if($b == 0){
    		return "ERROR: Can not divide by 0";
    	}else{
			error($a,$b);
		}
    return $a % $b;
    
}
function error($a, $b){
	if(is_numeric($a)==false|| is_numeric($b)==false){
		echo "ERROR: Both arguments a: {$a} and b: {$b} must be numbers\n";
		return false;
	}else{
		return true;
	}
};

$a = 9;
$b = 3;
$number = false;
// Add code to test your functions here
echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;
