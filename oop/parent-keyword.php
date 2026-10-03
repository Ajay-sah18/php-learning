<?php

// //Practice 1
// class Vehicle 
// {
//     public function start(){
//         return "Vehicle is starting";
//     }
// }

// class Car extends Vehicle 
// {
//     public function start() {
//         return parent::start() . " and Car is ready to drive.";
//     }
// }

// $car = new Car();

// echo $car->start();

//Practice 2

class Employee 
{
   public $name = "Ajay";

    public function showName() {
        return $this->name;

    }
}

class Developer extends Employee 
{
    public function showName() {
        return parent::showName() . " is a PHP Developer.";
    }
}

$developer = new Developer();

echo $developer->showName();

//Practice 3

class Person 
{
 
public $name = "Ajay";

public function introduce(){
    return  "My name is " . $this->name;
}
}

class Student extends Person 
{
    public function introduce(){
        return  parent::introduce() . " and I am a BCA student.";
    }
}

$student = new Student();

echo $student->introduce();