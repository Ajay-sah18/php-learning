<?php 


// $student1 = [
//     "name" => "Ajay",
//     "age" => 23,
//     "city" => "Biratnagar"
// ];

// $student2 = [
//     "name" => "Ajay",
//     "age" => 24,
//     "city" => "Biratnagar"
// ];

// $result = array_diff_assoc($student1, $student2);

// print_r($result);

$student1 = [
    "name" => "Ajay",
    "age" => 23,
    "city" => "Biratnagar"
];

$student2 = [
    "name" => "Ajay",
    "age" => 23,
    "location" => "Biratnagar"
];

$result = array_diff_assoc($student1, $student2);

print_r($result);