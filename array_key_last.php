<?php
// array_key_last() - it return the last key of an array.

$job = [
    "title" => "App Developer",
    "company" => "Infinite Nepal",
    "location" => "Kathmandu",
    "skills" => "Kotlin"
   ];

   $result = array_key_last($job);

   print_r($result);

   //Practice 2

    $user = [
  "name" => "Ajay",
   "email" => "abc@gmail.com",
   "phone" => 9800200020,
   "age" => 23,
   "city" => "Biratnagar"
 ];

 $result = array_key_last($user);

 print_r($result);

 //Practice 3

 $jobs = [
   "webDeveloper"=> [
    "title" => "  Junior PHP Developer  ",
    "company" => "  IT Solutions Nepal ",
    "location" => "  Biratnagar  ",
    "skills" => " PHP  "
   ],
   "appDeveloper" => [
    "title" => " App Developer ",
    "company" => "  Infinite Nepal  ",
    "location" => "  Kathmandu ",
    "skills" => "  Kotlin  "
   ]
];

$result = array_key_last($jobs["appDeveloper"]);

print_r($result);

