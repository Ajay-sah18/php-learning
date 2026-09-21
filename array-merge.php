<?php

// $array1 = [
//     "student1" => "Nikhil",
//     "student2" => "Gudu",
//     "student3" => "Roshan"
// ];

// $array2 = [
//     "student1" => "Rabin",
//     "student2" => "Aasha",
//     "student3" => "Sunita"
// ];

// $result = array_merge($array1, $array2);

// print_r($result);

// foreach($result as $key => $value){
//     echo $key . " : " . $value . PHP_EOL;
// }

$keys = ["name", "age", "goal", "education", "college"];

$values = ["Ajay", 23, "Laravel Developer", "BCA", "Nihareeka College"];

$result = array_combine($keys, $values);

print_r($result);

foreach($result as $key => $value){
    echo $key . " : " . $value . PHP_EOL;
}