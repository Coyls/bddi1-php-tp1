<?php

$operation = $argv[1];
$firstNum = $argv[2];
$secondNum = $argv[3];




if ($operation === "add" || $operation === "+") {
    echo $firstNum + $secondNum;
}
if ($operation === "sub" || $operation === "-") {
    echo $firstNum - $secondNum;
}
if ($operation === "mult" || $operation === "*") {
    echo $firstNum * $secondNum;
}
if ($operation === "div" || $operation === "/") {
    echo $firstNum / $secondNum;
}
