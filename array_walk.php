<?php
// array_walk() let you run a function on every element of an array.

//Practice 1
$language = ["PHP", "Laravel", "MySQL", "Git", "Linux"];

function technology($language){
    echo $language . PHP_EOL;
};

array_walk($language, "technology");

//Practice 2

$jobs = [
    "PHP Developer" => 45000,
    "QA Tester" => 35000,
    "Laravel Developer" => 60000,
    "Data Analyst" => 50000
];

function showJob($salary, $title){
 echo $title . " - " . $salary . PHP_EOL;
}

array_walk($jobs, "showJob");

//Practice 3

$employee = [
    "Junior PHP Developer" => 35000,
    "Laravel Developer" => 60000,
    "QA Engineer" => 40000,
    "Data Analyst" => 50000,
    "Senior PHP Developer" => 75000
];

function displayJob($salary, $title){
    echo $title . " earns Rs. " . $salary . PHP_EOL;
}

array_walk($employee, "displayJob");