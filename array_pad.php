<?php
// array_pad() adds extra elements to an array until it reaches a specified length.

//Practice 1
$numbers = [10, 20, 30];

$result = array_pad($numbers, 5, 0);
print_r($result);

//Practice 2

$languages = ["PHP", "Laravel"];

print_r(array_pad($languages, 5, "Pending"));

//practice 3

$numbers = [100, 200, 300];

print_r(array_pad($numbers, -6, 0));