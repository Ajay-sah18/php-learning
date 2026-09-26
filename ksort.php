<?php
// ksort() - sorts an associative array by its keys in ascending order.

//Practice 1

$countries = [
    "Nepal" => 147,
    "India" => 140,
    "Bhutan" => 8,
    "Bangladesh" => 173,
    "Pakistan" => 241
];

ksort($countries);

print_r($countries);

//Practice 2
$students = [
    "Sita" => 102,
    "Ram" => 105,
    "Ajay" => 101,
    "Hari" => 104,
    "Gita" => 103
];

ksort($students);

print_r($students);

//Practice 3
$jobs = [
    "Web Development" => 25,
    "Data Analysis" => 18,
    "Graphic Design" => 12,
    "Mobile Development" => 20,
    "Software Testing" => 15
];

ksort($jobs);

print_r($jobs);