<?php 

//Practice 1 

class Student 
{
    public $name;
    public $age;
   
    public function __construct($name, $age = 18) {
        $this->name = $name;
        $this->age = $age;
    }
}

$Student1 = new Student("Ajay");
$Student2 = new Student("Ram", 25);

echo "Name:" . $Student1->name . " ". "Age:" . $Student1->age . "<br>";
echo "Name: " . $Student2->name . " ". "Age: " . $Student2->age ;

//Practice 2

class Product 
{
    public $name;
    public $price;
    public $category;

    public function __construct($name, $price, $category = "General") {
     $this->name = $name;
     $this->price = $price;
     $this->category = $category;
    }
}

$Product1 = new Product("Mobile", 20000, "Android Phone");
$Product2 = new Product("Laptop", 5000);

echo $Product1->name . " " . $Product1->price . " ".  $Product1->category ."<br>";

echo $Product2->name ." ". $Product2->price ." ". $Product2->category;

//Practice 3
 
class User 
{
    public $username;
    public $email;
    public $role;

    public function __construct($username, $email, $role = "user"){

    $this->username = $username;
    $this->email = $email;
    $this->role = $role;
    }

}

$User1 = new User("Ajay", "ajay123@gmail.com", "PHP Developer");
$User2 = new User("Ram", "ram422@gmail.com");
$User3 = new User("Abishek", "abishek435@gmail.com");

echo $User1->username . " " . $User1->email . " " . $User1->role . "<br>";

echo $User2->username . " " . $User2->email . " " . $User2->role . "<br>";

echo $User3->username . " " . $User3->email . " " . $User3->role;


