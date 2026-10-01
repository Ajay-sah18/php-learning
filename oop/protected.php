<?php

//Practice 1

class Vehicle 
{
    protected $brand = "Toyota";
       
}

class Car extends Vehicle 
{
    public function showBrand(){
       return $this->brand;
    }
}

$Car = new Car();

 echo $Car->showBrand();

 //Practice 2

 class Employee 
 {
    protected $salary = 30000;
 }

 class Developer extends Employee 
 {
    public function showSalary(){
        return $this->salary;
    }
 }

 $developer = new Developer();

 echo "Salary:" . $developer->showSalary();

 //Practice 3 

 class Person 
 {
    public $name;
    protected $age;
    private $email;

    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }
 }

 class Students extends Person 
 {
    public function showDetails(){
        return "Name: " . $this->name . "<br>" . "Age:" . $this->age;

    }
 }

 $student = new Students("Ajay", 23, "ajay123@gmail.com");

 echo $student->showDetails();