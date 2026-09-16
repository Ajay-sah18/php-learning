<?php

// $name = "Ajay";
// $age = 65;
// $height = 5.2;
// $isStudent = false;


// echo "My name is " . $name . PHP_EOL;
// echo "I am " . $age . " years old." . PHP_EOL;
// echo "My height is " . $height . "." . PHP_EOL;
// echo "This is a " . $isStudent . "." . PHP_EOL;

// var_dump("$name");
// var_dump($age);
// var_dump($height);
// var_dump($isStudent);

// $isLoggedIn = False;

$marks = 50;

if($marks >= 90){
    echo "Grade A";
} elseif($marks >= 80) {
    echo "Grade B";
} elseif($marks >=70){
    echo "Grade C";
} elseif($marks >= 60) {
    echo "Grade D";
} else {
    echo "Fail";
}