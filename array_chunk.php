<?php
//array_chunk() split one array into smaller arrays(chunks) of a specified size.

//practice 1
$programmingLanguages = ["PHP", "MySQL", "Laravel", "JavaScript", "Java", "Python"];

print_r(array_chunk($programmingLanguages, 2));


//Practice 2
$numbers = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50];

print_r(array_chunk($numbers, 3));

//practice 3
$students = ["Ajay", "Abhisek", "Nitesh", "puja", "preeti", "poonam", "sunita", "Aarti"];

print_r(array_chunk($students, 4));