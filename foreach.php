<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $items) {
	if(is_array($items)){
		echo "array\n";
	}else if(is_bool($items)){
		echo "bool\n";
	}else if(is_float($items)){
		echo "float\n";
	}else if(is_string($items)){
		echo "string\n";
	}else if(is_null($items)){
		echo "null\n";
	}
}
echo PHP_EOL . PHP_EOL;
foreach ($things as $items) {
	if (is_scalar($items)) {
        echo "{$items}\n";
    }
}
echo PHP_EOL . PHP_EOL; 
foreach($things as $items){
	if(is_array($items)){
    	foreach ($items as $value) {
    		echo "{$value}";
    	}
	}else if(is_scalar($items)) {
		echo "\n{$items}\n";      
	}
    
}