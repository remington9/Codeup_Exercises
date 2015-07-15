<?php

function add($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments a: {$a} and b: {$b} must be numbers\n";
    }
}

function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments a: {$a} and b: {$b} must be numbers\n";
    }
}

function divide($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
    	if($a == 0 || $b == 0){
    		return "ERROR: Can not divide by 0";
    	}else{
        return $a / $b;
	    }
    } else {
        return "ERROR: Both arguments a: {$a} and b: {$b} must be numbers\n";
    }
}
function modulus($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments a: {$a} and b: {$b} must be numbers\n";
    }
}

$a = 'six';
$b = 3;

// Add code to test your functions here
echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;
