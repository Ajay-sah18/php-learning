<?php

//Practice 1
// class Student 
// {
//     public $name;
//     public $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
// }

// $Student = new Student("Ajay", 23);

// echo $Student->name . "<br>";
// echo $Student->age;

//Practice 2

// class Car 
// {
//     public $brand;
//     public $model;

//     public function __construct($brand, $model) {
//         $this->brand = $brand;
//         $this->model = $model;
//     }
// }

// $Car1 = new Car("scorpio", 2026);
// $Car2 = new Car("BMW", 2027);

// echo $Car1->brand . " " . $Car1->model . "<br>";

// echo $Car2->brand . " " . $Car2->model;


//Practice 2 

class Employee 
{
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
}

$Employee1 = new Employee("Ajay", 30000);
$Employee2 = new Employee("Ram", 40000);

echo "Employee: " . $Employee1->name .  " " . $Employee1->salary . "<br>";
echo "Employee: " . $Employee2->name . " " . $Employee2->salary;