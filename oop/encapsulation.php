<?php

//Practice 1

class User 
{
    public $username;
    public $email;
    private $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function showUser(){
      return $this->username . " " . $this->email;
    }
}

$User = new User("Ajay", "ajay123@gmail.com", 12345);

echo $User->showUser();

//Practice 2

class BankAccount 
{
    public $accountHolder;
    private $balance;

    public function __construct($accountHolder, $balance){
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance = $this->balance + $amount;
    }

    public function showBalance() {
        return $this->balance;
    }
}

$Account = new BankAccount("Ajay", 5000);

$Account->deposit(2000);
echo "Current Balance:" . $Account->showBalance();

//Practice 3

class Employee 
{
    public $name;
    private $salary;

    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function increaseSalary($amount) {
        $this->salary = $this->salary + $amount; 
    }

    public function showSalary(){
        return $this->salary;
    }
}

$Employee = new Employee("Ajay", 30000);

$Employee->increaseSalary(5000);

echo "Employee:" . $Employee->name . "Salary: " . $Employee->showSalary();