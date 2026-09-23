<?php

// $students = [
//     101 => "Nischal",
//     103 => "Ajay", 
//     204 => "Abishek",
//     305 => "Nitesh",
//     404 => "Rabin"
// ];

// $result = array_search("Ajay", $students);
// print_r($result);

// print_r(array_search("Ajay", $students));

// $products = [
//     102 => "Mobile",
//     204 => "Speaker",
//     207 => "Laptop",
//     405 => "Bluetooth",
//     505 => "Headphone"
// ];

// print_r(array_search("Computer", $products));

// var_dump((array_search("Computer", $products)));

$students = [
    101 => "Nischal",
    103 => "Ajay", 
    204 => "Abishek",
    305 => "Nitesh",
    404 => "Rabin"
];

$result = array_search("Ajay", $students);

if($result === false){
    echo "Student not found.";
} else {
    echo "Student found with ID: " . $result;
}