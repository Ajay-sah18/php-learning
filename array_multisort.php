<?php
// array_multisort() - can sort multiple arrays at the same time.

//Practice 1
$students = ["Ram", "Sita", "Ajay", "Hari"];

$marks = [75, 92, 68, 85];

array_multisort($marks, $students);

print_r($marks);
print_r($students);


//Practice 2

$jobTitles = ["PHP Developer", "QA Tester", "Laravel Developer", "Web Designer", "Data Analyst"];

$salaries = [45000, 35000, 60000, 40000, 50000];

array_multisort($salaries, $jobTitles);

print_r($salaries);
print_r($jobTitles);

//Practice 3

$jobTitles = ["Junior PHP Developer", "Laravel Developer", "QA Engineer", "Data Analyst", "Senior PHP Developer"];
$salaries = [35000, 60000, 40000, 50000, 75000];

array_multisort($salaries, SORT_DESC, $jobTitles);

print_r($salaries);
print_r($jobTitles);