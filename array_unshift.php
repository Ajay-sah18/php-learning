<?php

$fruits = ["Banana", "Mango", "Orange"];

array_unshift($fruits, "Apple");
print_r($fruits);


$numbers = [20, 30, 40];

array_unshift($numbers, 0, 10);
print_r($numbers);


$students = ["Ajay", "Abishek", "Nitesh"];

$result = array_unshift($students, "Nischal");
print_r($result);