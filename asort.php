<?php

// asort() sort values in ascending order while preserving the original keys.

//Practice 1
$marks = [
    "ajay" => 75,
    "Ram" => 60,
    "Sita" => 90,
    "Hari" => 68
];

asort($marks);

print_r($marks);

//Practice 2

$jobs = [
    "PHP Developer" => 45000,
    "QA Tester" => 35000,
    "Laravel Developer" => 60000,
    "Web Designer" => 40000,
    "Data Analyst" => 50000
];

asort($jobs);

print_r($jobs);

//Practice 3

$products = [
    "keyboard" => 2500,
    "Mouse" => 1200,
    "Monitor" => 18000,
    "Headphones" => 3500,
    "Webcam" => 4500
];

asort($products);

print_r($products);