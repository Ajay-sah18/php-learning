<?php
// array_fill() creates a new array with a specified number of elements, all containing the same value.

//Practice 1
$numbers = array_fill(0, 5, 0);

print_r($numbers);

//Practice 2
$numbers = array_fill(0, 6, "Pending");
print_r($numbers);

//Practice 3
$languages = array_fill(1, 4, "PHP");

print_r($languages);