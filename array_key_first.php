<?php
// array_key_first() - It returns the first key of an array.

// $jobs = [
//     "title" => "PHP Developer",
//     "company" => "IT Solutions Nepal",
//     "location" => "Biratnagar",
//     "salary" => 45000,
// ];

// $result = array_key_first($jobs);

// print_r($result);

// //Practice 2

// $user = [
//   "name" => "Ajay",
//   "email" => "abc@gmail.com",
//   "age" => 23,
//   "city" => "Biratnagar"
// ];

// $result = array_key_first($user);

// print_r($result);

//Practice 3

$jobs = [
   "webDeveloper"=> [
    "title" => "  Junior PHP Developer  ",
    "company" => "  IT Solutions Nepal ",
    "location" => "  Biratnagar  ",
    "skills" => " PHP  "
   ],
   "AppDeveloper" => [
    "title" => " App Developer ",
    "company" => "  Infinite Nepal  ",
    "location" => "  Kathmandu ",
    "skills" => "  Kotlin  "
   ]
];

$result = array_key_first($jobs);

print_r($result);

