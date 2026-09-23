<?php

$products = [
    102 => "Mobile",
    204 => "Speaker",
    207 => "Laptop",
    405 => "Bluetooth",
    505 => "Headphone"
];

 $result = array_key_exists(205, $products);

var_dump($result);

$result = array_key_exists(207, $products);

var_dump($result);

$result = array_key_exists(405, $products);

var_dump($result);

print_r(array_search("Bluetooth", $products));