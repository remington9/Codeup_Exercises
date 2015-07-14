<?php

fwrite(STDOUT, "Enter a min number ");
$min = trim(fgets(STDIN));
if(is_numeric($min)){
	fwrite(STDOUT, "Enter a max number ");
	$max = trim(fgets(STDIN));
	if(is_numeric($max)){
		fwrite(STDOUT, "Enter a number to incrament by ");
		$inc = trim(fgets(STDIN));
		if(is_numeric($inc)){
			for($i=$min; $i<=$max; $i+=$inc){
				if($i % 3 == 0 && $i % 5 == 0){
					echo "FizzBuzz\n";
				}else if($i % 5 == 0){
					echo "Buzz\n";
				}else if($i % 3 == 0){
					echo "Fizz\n";
				}else{
				echo "$i \n";
				}
			}
		}else if(empty($inc)){
			$inc = 1;
			echo "error please enter a number next time or incrament will default to 1 \n";
			for($i=$min; $i<=$max; $i+=$inc){
				if($i % 3 == 0 && $i % 5 == 0){
					echo "FizzBuzz\n";
				}else if($i % 5 == 0){
					echo "Buzz\n";
				}else if($i % 3 == 0){
					echo "Fizz\n";
				}else{
				echo "$i \n";
				}
			}
		}
	}else{
		echo 'error please enter a number next time';
	}
}else{
	echo 'error please enter a number next time';
}
