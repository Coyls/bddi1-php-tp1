<?php

$operation = $argv[1];
$firstNum = $argv[2];
$secondNum = $argv[3];

switch ($operation){
    case "+";
    case "add";
        echo $firstNum + $secondNum;
        break;
    case "-";
    case "sub";
        echo $firstNum - $secondNum;
    break;
    case "*";
    case "mult";
        echo $firstNum * $secondNum;
    break;
    case "/";
    case "div";
        echo $firstNum / $secondNum;
    break;
    default: "unknown operation";
}


