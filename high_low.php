<?php

$min = 1;
$max = 100;
if ($argc >= 3){
	if (is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2]) {
	$min = $argv[1];
	$max = $argv[2];
	fwrite(STDOUT, "Guess a number between {$argv[1]} and {$argv[2]} see if you guessed correctly\n");
	} else {
	fwrite(STDERR, "You need to pass 2 numeric values\n");
	exit(1);
	}
}

$randomNumber = mt_rand($min, $max);
$guessCount = 0;



do {
	fwrite(STDOUT, 'Guess: ');
	$guess = trim(fgets(STDIN));

	if($guess < $randomNumber){
		fwrite(STDOUT, "HIGHER\n");
	} elseif ($guess > $randomNumber){
		fwrite(STDOUT, "LOWER\n");
	} else {
		fwrite(STDOUT, "GOOD GUESS!!\n");
	}
	$guessCount++;
} while ($guess != $randomNumber);

fwrite(STDOUT, "You guessed $guessCount times.\n");