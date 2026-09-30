<?php

//Practice 1
// class student {
 
//  public $name;
//  public $age;
//  public $course;

// }

// $student = new student();

// $student->name = "Ajay";
// $student->age = 23;
// $student->course = "PHP";

// echo $student->name;
// echo $student->age;
// echo $student->course;

//Practice 2

// class Employee 
// {
//     public $name;
//     public $position;
//     public $salary;
// }

// $Employee1 = new Employee();
// $Employee2 = new Employee();

// $Employee1->name = "Ajay";
// $Employee1->position = "PHP Developer";
// $Employee1->salary = 40000;

// $Employee2->name = "Ram";
// $Employee2->position = "Laravel Developer";
// $Employee2->salary = 50000;

// echo $Employee1->name;
// echo $Employee1->position;
// echo $Employee1->salary;

// echo $Employee2->name;
// echo $Employee2->position;
// echo $Employee2->salary;

//Practice 3

class Job 
{
    public $title;
    public $company;
    public $location;
    public $salary;
}

$Job1 = new Job();
$Job2 = new Job();

$Job1->title = "PHP Developer";
$Job1->company = "ABC Company";
$Job1->location = "Biratnagar";
$Job1->salary = 30000;

$Job2->title = "Laravel Developer";
$Job2->company = "XYZ Company";
$Job2->location = "Janakpur";
$Job2->salary = 50000;

echo $Job1->title;
echo $Job1->company;
echo $Job1->location;
echo $Job1->salary;

echo $Job2->title;
echo $Job2->company;
echo $Job2->location;
echo $Job2->salary;