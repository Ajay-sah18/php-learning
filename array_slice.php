<?php

// $programmingLanguages = ["PHP", "JavaScript", "Python", "Laravel", "HTML", "CSS", "MySQL"];

// $result = array_slice($programmingLanguages, 2);

// print_r($result);

$students = [
    "Ajay",
    "Suman",
    "Nitesh",
    "Abishek",
    "Rabin",
    "Nikhil"
];

// $selectedStudents = array_slice($students, 1, 4);

// print_r($selectedStudent);

$selectedStudents = array_slice($students, -2);
print_r($selectedStudents);