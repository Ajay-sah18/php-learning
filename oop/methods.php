<?php

//practice 1

// class student 
// {
//     public $name;
//     public $age;
//     public function introduce( )
//        {
//         echo "My name is " . $this->name . ".";
//         echo " My age is " . $this->age . ".";
//            }
// }

// $student = new student;

// $student->name = "Ajay";
// $student->age = 23;

// $student->introduce();

// //Practice 2

// class car 
// {
//     public $brand;
//     public $model;

//     public function showCar() {
//         echo "Car brand is " . $this->brand . ".";
//         echo " Car model is " . $this->model . ".";
//     }
// }

// $car = new car();

// $car->brand = "BMW";
// $car->model = 2026;

// $car->showCar();

//Practice 3

class Job 
{
    public $title;
    public $company;
    public $salary;

    public function showJob() {
        echo "I am a " . $this->title . ".";
        echo " My company name is " . $this->company . ".";
        echo " Salary is " . $this->salary . ".";

    }
}

$Job1 = new Job();
$Job2 = new Job();

$Job1->title = "PHP Developer";
$Job1->company = "IT Solutions Nepal";
$Job1->salary = 40000;

$Job2->title = "Laravel Developer";
$Job2->company = "Infinite Nepal";
$Job2->salary = 30000;

$Job1->showJob();
$Job2->showJob();