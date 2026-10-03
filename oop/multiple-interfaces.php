<?php

//Practice 1

// interface Payment
// {
//     public function pay($amount);
// }

// interface Refund
// {
//     public function refund($amount);
// }

// class Esewa implements Payment, Refund
// {
//     public function pay($amount)
//     {
//         return "Paid Rs. " . $amount . " through eSewa.";
//     }

//     public function refund($amount)
//     {
//         return "Refunded Rs. " . $amount . " through eSewa.";
//     }
// }

// $esewa = new Esewa();

// echo $esewa->pay(500);
// echo $esewa->refund(200);

//Practice 2

// interface Payment 
// {
//     public function pay($amount);
// }

// interface Refund 
// {
//     public function refund($amount);
// }

// class Khalti implements Payment, Refund 
// {
//     public function pay($amount) {
//         return "Paid Rs. " . $amount . " through Khalti.";
//     }
//     public function refund($amount) {
//         return "Refunded Rs. " . $amount . " through Khalti.";
//     }
// }

// $khalti = new Khalti();

// echo $khalti->pay(1500);

// echo $khalti->refund(500);

//Practice 3

interface Order 
{
    public function placeOrder($food);
}

interface Payment 
{
    public function pay($amount);
}

class FoodDelivery implements Order, Payment
{
    public function placeOrder($food) {
        return "Order placed for " . $food . "<br>";
    }
    public function pay($amount) {
        return "Paid Rs. " . $amount . " for the order.";
    }
}

$foodDelivery = new FoodDelivery();

echo $foodDelivery->placeOrder("Pizza");

echo $foodDelivery->pay(800);