<?php
// array_flip swaps the keys and values of an array.
//Practice 1
$student = [
    "name" => "Ajay",
    "age" => 23,
    "city" => "Biratnagar"
];

print_r(array_flip($student));

//Practice 2

$programmings = [
    "php" => "Backend",
    "html" => "Frontend",
    "mysql" => "Database"
];

print_r(array_flip($programmings));

//Practice 3

$colors = ["red", "green", "blue"];
print_r(array_flip($colors));