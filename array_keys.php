<?php

$person = [
    "name" => "Ajay",
    "age" => 23,
    "city" => "Biratnagar",
    "country" => "Nepal"
    ];

$result = array_keys($person);

print_r($result);


$products = [
    101 => "Laptop",
    205 => "Android Phone",
    310 => "Speaker",
    350 => "Headphone",
    400 => "Wireless Speaker"
];

print_r(array_keys($products));

$employees = [
    101 => "Ajay",
    202 => "Nischal",
    240 => "Suman",
    360 => "Abishek",
    450 => "Nikhil"
];

print_r(array_keys($employees));

print_r(array_values($employees));