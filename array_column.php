<?php
// array_column() gets the values from one column/key of a multidimensional array.

//Practice 1
$students = [
    ["name" => "Ajay", "course" => "PHP"],
    ["name" => "Ram", "course" => "Laravel"],
    ["name" => "Sita", "course" => "Java"]
];

print_r(array_column($students, "name"));

//Practice 2

$products = [
    ["id" => 101, "name" => "Iphone", "price" => 10000],
    ["id" => 201, "name" => "Laptop", "price" => 80000],
    ["id" => 205, "name" => "Android", "price" => 40000]
];

print_r(array_column($products, "price"));

//practice 3

$jobs = [
    ["id" => 101, "title" => "PHP Developer", "company" => "ABC Tech"],
    ["id" => 102, "title" => "QA Tester", "company" => "XYZ Solutions"],
    ["id" => 103, "title" => "Laravel Developer", "company" => "Tech Nepal"],
    ["id" => 105, "title" => "Java Developer", "company" => "Infinite Nepal"]
];

$titles = array_column($jobs, "title");

print_r($titles);

