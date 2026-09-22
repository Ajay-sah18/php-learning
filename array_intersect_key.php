<?php

$product1 = [
    "name" => "Laptop",
    "price" => 80000,
    "brand" => "Dell",
    "stock" => 10
];

$product2 = [
"name" => "Phone",
"price" => 30000,
"brand" => "Samsung",
"category" => "Electroincs"
];

$result = array_intersect_key($product1, $product2);

print_r($result);
