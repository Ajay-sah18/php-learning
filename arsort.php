<?php
// arsort() sorts values in descending order while preserving the original keys.

//Practice 1
$marks = [
    "Ajay" => 82,
    "Ram" => 65,
    "Sita" => 95,
    "Hari" => 72
];

arsort($marks);

print_r($marks);

//Practice 2

$jobs = [
    "PHP Developer" => 45000,
    "QA Tester" => 35000,
    "Laravel Developer" => 60000,
    "Web Designer" => 40000,
    "Data Analyst" => 50000
];

arsort($jobs);

print_r($jobs);

//Practice 3

$employee =[
    "Ram" => 45000,
    "Sita" => 55000,
    "Hari" => 38000,
    "Gita" => 62000,
    "Mina" => 48000,
    "Rohan" => 70000
];

arsort($employee);

print_r($employee);