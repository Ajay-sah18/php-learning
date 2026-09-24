<?php
// array_replace() replaces values in the first array using values from one or more following arrays, matching by key.

$student = [
    "name" => "Ajay",
    "age" => 23,
    "course" => "Laravel",
    "city" => "Biratnagar"
];

$updatedStudent = [
    "age" => 25,
    "city" => "Rajbiraj"
];

print_r(array_replace($student, $updatedStudent));


$product = [
    "name" => "Laptop",
    "price" => 80000,
    "stock" => 250,

];

$productUpdated = [
    "price" => 50000,
    "stock" => 20
];

print_r(array_replace($product, $productUpdated));


$configuration = [
    "theme" => "light",
    "language" => "English",
    "notification" => "enabled"
];

$updated = [
    "theme" => "dark",
    "notification" => "disabled"
];

print_r(array_replace($configuration, $updated));