<?php

$employee = [
"name" => "Ajay",
"age" => 23,
"city" => "Biratnagar",
"role" => "Developer"
];

$employeeInfo = [
    "name" => "Ram",
    "age" => 25,
    "role" => "tester"
];

$result = array_diff_key($employee, $employeeInfo);

print_r($result);
