<?php

// $languages = ["PHP", "Laravel", "MySQL", "Java", "JavaScript"];

// $result = in_array("PHP", $languages);

// var_dump($result);

// $result = in_array("Python", $languages);

// var_dump($result);

$products = [
    101 => "Laptop",
    205 => "Mobile",
    310 => "Speaker",
    405 => "Headphone",
    505 => "Mouse"
];

$result = in_array("Laptop", $products);

var_dump($result);

$result = array_search("Laptop", $products);

var_dump($result);

$result = array_key_exists(405, $products);

var_dump($result);