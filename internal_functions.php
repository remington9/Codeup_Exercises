<?php
// TODO: Create your inspect() function here
function inspect($a){
	if(is_array($a)){
		if(empty($a)){
			return "The value is an empty array\n";
		}else{
			return "The value is an array\n";
		}
	}else if(is_bool($a)){
		if($a == true){
			return "The boolean is true\n";
		}else{
			return "The boolean is false\n";
		}
	}else if(is_int($a)){
		return "The int is {$a}\n";
	}else if(is_string($a)){
		if(empty($a)){
			return "The string is empty\n";
		}else{
			return "The string is {$a}\n";
		}
	}else if(is_null($a)){
		return "The value is NULL\n";
	}else if(is_float($a)){
		return "The float is {$a}\n";
	}
}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;
echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;
echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;
echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;
echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;
echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;
echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;
echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;
echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;
echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;




