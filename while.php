<?php

$a = 5;
while ($a <= 15) {
	if ($a % 4 == 0){
		echo "$a is divisible by 4 and 2\n";
	}else if ($a % 2 == 0){
		echo "$a is divisible by 2\n";
	}

    echo "{$a}\n";
    $a++;
}


?>