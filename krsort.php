<?php
//krsort() - sort the array in descenging order, where k- key, r - reverse.

//Practice 1

$countries = [
    "Nepal" => 30,
    "India" => 140, 
    "Bhutan" => 8,
    "Bangladesh" => 173,
    "Pakistan" => 241
];

krsort($countries);

print_r($countries);

//Practice 2 
$marks = [
    "Ram" => 75,
    "Sita" => 92,
    "Ajay" => 88,
    "Hari" => 65,
    "Gita" => 81
];

krsort($marks);

print_r($marks);

// Practice 3

$jobs = [
    "Web Development" => 25,
    "Data Analysis" => 18,
    "Graphic Design" => 12,
    "Mobile Development" => 20,
    "Software Testing" => 15
];

krsort($jobs);

print_r($jobs);