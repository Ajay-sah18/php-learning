<?php
// array_rand() randomly selects one or more keys from an array.

//Practice 1
$languages = ["PHP", "Java", "Python", "C++"];

$key = array_rand($languages);

echo $languages[$key] . PHP_EOL;

//Practice 2

$colors = ["Red", "Green", "Blue", "Yellow", "Black"];

$keys = array_rand($colors ,2);

echo $colors[$keys[0]] . PHP_EOL;
echo $colors[$keys[1]] . PHP_EOL;

//Practice 3

$questions = [
    "What is PHP?",
    "What is Laravel?",
    "What is MySQL?",
    "What is Git?"
];

$key =  array_rand($questions);

echo $questions[$key] . PHP_EOL;

