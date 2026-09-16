<?php

$name = "Ajay";
$age = 15;
$height = 5.2;
$isStudent = false;


echo "My name is " . $name . PHP_EOL;
echo "I am " . $age . " years old." . PHP_EOL;
echo "My height is " . $height . "." . PHP_EOL;
echo "This is a " . $isStudent . "." . PHP_EOL;

var_dump("$name");
var_dump($age);
var_dump($height);
var_dump($isStudent);

$isLoggedIn = False;

if($age >= 18){
    echo "You are adult.";
} else {
    echo "You are not adult.";
}