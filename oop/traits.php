<?php

//Practice 1

// trait Logger 
// {
//     public function log() {
//         return "Activity logged successfully";
//     }
// }

// class User 
// {
//     use Logger;

// }

// $user = new User();

// echo $User->log();

//Practice 2

// trait Logger
// {
//     public function log($message){
//         return "Log: " . $message;
//     }
// }

// class User 
// {
//     use Logger;
// }

// class Order 
// {
//     use Logger;
// }

// $user = new User();

// $order = new Order();

// echo $user->log("User logged in") ;
//  echo $order->log("Order created");

//Practice 3

trait Timestamp
{
    public function showTime(){
        return date("Y-m-d H:i:s");
    }
}

class User 
{
    use Timestamp;
}

class Order 
{
    use Timestamp;
}

$user = new User();

$order = new Order();

echo "User created at: " . $user->showTime();

echo "Order created at: " . $order->showTime();