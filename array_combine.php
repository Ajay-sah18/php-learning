<?php

// $student = ["name", "age", "course", "city"];
// $studentInfo = ["Ajay", 23, "Laravel", "Biratnagar"];

// $result = array_combine($student, $studentInfo);

// print_r($result);

// $product = ["name", "price", "brand", "stock"];

// $productInfo = ["Laptop", 60000, "Dell", 20 ];

// $result = array_combine($product, $productInfo);

// print_r($result);

$names = ["frontend", "backend", "database", "version_control"];
$skills = ["HTML", "PHP", "MySQL", "Git"];



$result = array_combine($names, $skills);

print_r($result);