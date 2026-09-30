<?php

//Practice 1
// class Car 
// {
//     public $brand;

//     public function showBrand(){
//         echo " Car brand is " . $this->brand . ".";
//     }
// }

// $Car1 = new Car();
// $Car2 = new Car();

// $Car1->brand = "BMW";
// $Car2->brand = "Scorpio";

// $Car1->showBrand();
// $Car2->showBrand();

// //practice 2

// class BankAccount 
// {
//     public $balance;

//     public function deposit($amount) {
//         $this->balance =  $this->balance + $amount;

//         echo "The final balance is " . $this->balance;
//     }
// }

// $BankAccount = new BankAccount();

// $BankAccount->balance = 5000;

// $BankAccount->deposit(2000);

//Practice 3

class Person 
{
    public $name;
 
    public function changeName($newName){
        $this->name = $newName;
        echo "New name is " . $this->name . ".";
    }
}

$Person = new Person();

$Person->name = "Ajay";
$Person->changeName("Abishek");


