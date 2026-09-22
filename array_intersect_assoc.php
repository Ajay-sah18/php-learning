<?php

$user1 = [
    "name" => "Ajay",
    "age" => 23,
    "city" => "Biratnagar",
    "role" => "Developer"
];

$user2 = [
    "name" => "Ram",
    "age" => 23,
    "city" => "Kathmandu",
    "role" => "Tester"
];

$result = array_intersect_assoc($user1, $user2);

print_r($result);