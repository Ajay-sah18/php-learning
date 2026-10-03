<?php

// //Practice 1

// class Animal 
// {
//     public function sound() {
//         return "Animal makes a sound";
//     }
// }

// class Dog extends Animal 
// {
//     public function sound() {
//         return "Dog barks" ;
//     }
// }

// $dog = new Dog();

// echo $dog->sound();

//Practice 2

class Employee 
{
    public function work() {
        return "Employee is working.";
    }
}

class Developer extends Employee 
{
    public function work() {
        return "Developer is writing code.";
    }
    public function writeCode() {
        return "PHP code is being written.";
    }
}

$developer = new Developer();

echo $developer->work();
echo $developer->writeCode();

//Practice 3

class Animal 
{
    public function sound() {
        return "Animal makes a sound";
    }
}

class Cat extends Animal 
{
    public function sound() {
       return "Cat says meow";
    }

    public function sleep() {
        return "Cat is sleeping";
    }
}

$cat = new Cat();

echo $cat->sound();