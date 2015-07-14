<?php

if($argc > 1){
	$arg1 = $argv[1];
	$arg2 = $argv[2];
	game($arg1, $arg2);
}else{
	game();
}

function game($arg1 = 1, $arg2 = 100){
	if($arg1 < $arg2){
		$answer = mt_rand($arg1, $arg2);
	}else if($arg1 > $arg2){
		$answer = mt_rand($arg2, $arg1);
	}else if ($arg1 == 0 && $arg2 == 0){
		$arg1 = 1;
		$arg2 = 100;
		$answer = mt_rand($arg1, $arg2);
	}

	$guesses = 0;
	
	$guess = trim(fgets(STDIN));
	
	fwrite(STDOUT, "Guess a number between $arg1-$arg2 ");

	echo "Guessed number $guess\n";

	while($guess != $answer){
		if($guess > $answer){
			echo "LOWER!\n";
			$guesses++;
			fwrite(STDOUT, "Guess a number between $arg1-$arg2 ");
		}else if($guess < $answer){
			echo "HIGHER!\n";
			$guesses++;
			fwrite(STDOUT, "Guess a number between $arg1-$arg2 ");
		}
		$guess = trim(fgets(STDIN));
	}
	$guesses++;
	echo "GREAT GUESS! You made $guesses guesses! Play again! \n";
	game($arg1, $arg2);
}
