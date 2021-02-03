<?php

$counter = 0;
$numberToGuess = rand(0,100);

do {
    $counter++;
    $line = trim(fgets(STDIN));

    if ($numberToGuess > $line) {
        echo "too low \n";
    }else if ($numberToGuess < $line){
        echo "too hight \n";
    } else {
        echo "You win";
        break;
    }

} while(true);

echo "in ".$counter." attempts!\n";