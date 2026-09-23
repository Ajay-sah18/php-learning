<?php

// $fruits = ["Apple", "Banana", "mango", "Orange", "Grapes", "Watermelon"];

// $results = array_splice($fruits, 1, 2);

// print_r($results);

// print_r($fruits);

//Insert into array

// $fruits = ["Apple", "Banana", "Mango", "Orange"];

// array_splice($fruits, 1, 0, ["Grapes"]);

// print_r($fruits);

// $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

// array_splice($fruits, 1, 2);

// array_splice($fruits,2, 2 , ["Pineapple", "Watermelon"]);
// print_r($fruits);

$students = ["Ram", "Sita", "Hari", "Gita", "John"];

array_splice($students, 2, 1, ["Krishna"]);


print_r($students);