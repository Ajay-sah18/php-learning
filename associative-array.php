<?php

// $person = [
//     "name" => "Ajay",
//     "age" => 23,
//     "goal" => "Laravel Developer"
// ];

// echo $person["name"] . ":" . $person["goal"] . PHP_EOL;

// $item = [
//     "product" => "Laptop",
//     "price" => 50000,
//     "quantity" => 5,
// ];

// $item["price"] = 60000;
// $item["brand"] = "Dell";
// $item["city"] = "Biratnagar";

// echo  $item["product"] . " : ". $item["price"] . " : " . $item["quantity"] . " : " . $item["brand"] . " : ". $item["city"] . PHP_EOL;


// $person = [
//     "name" => "Ajay",
//     "age" => 23,
//     "goal" => "Laravel Developer"
// ];

// foreach($person as $key => $value) {
//     echo $key . " : " . $value . PHP_EOL;
// }


// $item = [
//     "product" => "laptop",
//     "price" => 50000,
//     "quantity" => 10
// ];

// foreach($item as $key => $value) {
//     echo $key . " : " . $value . PHP_EOL;
// }


// $person = [
//     "name" => "Ajay",
//     "email" => "ajaysah123@gmail.com",
//     "role" => "Laravel Developer"
// ];

// foreach($person as $key => $value) {
//     echo $key . " : " . $value . PHP_EOL;
// }

//Nested Array

// $students = [
// "student1" => [
//     "name" => "Ajay",
//     "age" => 23
// ],
// "student2" => [
//     "name" => "Abishek",
//     "age" => 22
// ]

// ];

// echo $students["student2"]["name"];

$products = [
"Electronic" => [
    "name" => "Fan",
    "price" => 2300
],
"Cosmetic" => [
    "name" => "Hair Oil",
    "price" => 225
]

];

// echo $products["Electronic"] ["name"] . " : " .  $products["Electronic"] ["price"] . PHP_EOL;
// echo $products["Cosmetic"]["name"] . PHP_EOL;

// echo $products["Cosmetic"]["price"];

foreach($products as $key => $value) {
    // echo $value["name"] . " : " . $value["price"] . PHP_EOL;
//    echo $products["Electronic"]["name"]  . PHP_EOL;
// echo $products["Cosmetic"]["name"] . PHP_EOL;

echo $value["name"] . PHP_EOL;
    }