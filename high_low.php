<?php

$randomNumber = mt_rand(1,100);
$guessCount = 0;

do {
	fwrite(STDOUT, 'Guess: ');
	$guess = trim(fgets(STDIN));

	if($guess < $randomNumber){
		fwrite(STDOUT, "HIGHER\n")
	} elseif ($guess > $randomNumber){
		fwrite(STDOUT, "LOWER\n");
	} else {
		fwrite(STDOUT, "GOOD GUESS!!\n");
	}
	$guessCount++;
} while ($guess != $randomNumber);

fwrite(STDOUT, "You guessed $guessCount times.");