 <?php

// //Practice 1

// abstract class Animal
// {
//     abstract  public function sound();
    
// }

// class Dog extends Animal 
// {
//   public function sound(){
//     return "Dog barks";
//    }
// }

// $dog = new Dog();

// echo $dog->sound();

// //Practice 2

// abstract class Employee 
// {
//     abstract public function work();
// }

// class Developer extends Employee 
// {
//     public function work() {
//         return "Developer writes code.";
//     }
// }

// $developer = new Developer();

// echo $developer->work();

// //Practice 3 - Payment system

// abstract class Payment
// {
//     abstract public function pay();
// }

// class Esewa extends Payment 
// {
//     public function pay(){
//         return "Payment made through eSewa";
//     }
// }

// $esewa = new Esewa();

// echo $esewa->pay(); -->

//Practice 4 - Notification System

abstract class Notification 
{
    public $recipient;

    abstract public function send();

     public function __construct($recipient){

        return $this->recipient = $recipient;

     }

    public function getRecipient() {
         $this->recipient ;
     }
}

class EmailNotification extends Notification 
{
    public function send( ){
      return  "Email sent to " . $this->recipient;
    }
}

class SMSNotification extends Notification 
{
    public function send() {
       return  "SMS sent to " . $this->recipient;
    }
}

$Email = new EmailNotification("ajay@gmail.com");
$SMS = new SMSNotification("9800000000");

echo "Recipient: " . $Email->getRecipient() . "<br>";
echo $Email->send() . "<br><br>";

echo "Recipient: " . $SMS->getRecipient() . "<br>";
echo $SMS->send();