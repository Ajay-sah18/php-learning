<?php

//PHP Functions Practice


// function sayHello($name) {
//     echo "Hello, " . $name . "!" . PHP_EOL;
// }

// sayHello("Ajay");
// sayHello("Ram");
// sayHello("Sita");

// function welcomeUser($name, $role){
//     echo "Welcome $name! You are an $role." . PHP_EOL;
// }

// welcomeUser("Ajay", "Job Seeker");
// welcomeUser("Ram", "Employer");

// function addNumber($a, $b){
//     return $a + $b;
// }

// $result = addNumber(10,20);
// echo $result . PHP_EOL;

// function calculateSalary($hours, $rate) {
//     return $hours * $rate;
// }

// $salary = calculateSalary(40,500);
// echo $result . PHP_EOL;

   //Default Parameter
// function welcomeUser($name, $role = "Job Seeker"){
//     echo "Welcome $name! You are an $role." . PHP_EOL;
// }

// welcomeUser("Ajay");
// welcomeUser("Ram","Employer");

// function addNumber(int $a, int $b): int {
//     return $a + $b;
// }

// $result = addNumber(10,20);
// echo $result . PHP_EOL;

// function greet( string $name): string
// {
//     return "Hello, " . $name;
// }

// $message = greet("Ajay");
// echo $message . PHP_EOL;

// function showSkills(array $skills): void
// {
//     foreach($skills as $skill) {
//         echo $skill . PHP_EOL;
//     }
// }

// $mySkills = ["PHP", "Laravel", "Git", "Linux"];

// showSkills($mySkills);

// $city = "Biratnagar";

// function showName()
// {
//     global $city;
//     echo "My city is " . $city  . PHP_EOL;
// }

// showName();

      //Anonymous Function
//  $greet = function (string $name): string {
//     return "Hello, " . $name . "!";
//  }; 

//  $message = $greet("Ajay");
//  echo $message . PHP_EOL;

//ARROW FUNCTIONS

// $calculateTotal = fn($price, $quantity) => $price * $quantity;

// echo $calculateTotal(500, 3) . PHP_EOL;

// // Static and Global Variables

$name = "Ajay";

function introduce()
{
      global $name ;
     echo $name . PHP_EOL;
}

function countVisits()
{
      static $count = 0;
      $count++;
      echo $count . PHP_EOL;
}

introduce();

countVisits();
countVisits();
countVisits();

