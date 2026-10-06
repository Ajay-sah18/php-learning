<?php

require "SchoolStudent.php";
require "CollegeStudent.php";

use School\Student as SchoolStudent;
use College\Student as CollegeStudent;

$schoolStudent = new SchoolStudent();
$collegeStudent = new CollegeStudent();

echo $schoolStudent->show() . "<br>";
echo $collegeStudent->show();