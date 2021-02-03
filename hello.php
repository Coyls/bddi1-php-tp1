<?php

$word = "world";

if ($argc > 1) {
    $word = $argv[1];
}

echo "hello " . $word;

