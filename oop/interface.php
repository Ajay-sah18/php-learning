<?php
//Practice 1 - Payment Interface

// interface Payment 
// {
//     public function pay();
// }

//  class Esewa implements Payment 
// {
//   public function pay() {
//     return "Payment made through eSewa";
//   }
// }

// $esewa = new Esewa();

// echo $esewa->pay();

//Practice 2 - Multiple Payment Methods

// interface Payment 
// {
//     public function pay();
// }

// class Esewa implements Payment 
// {
// public function pay(){
//  return "Payment made through eSewa.";
// }
// }

// class Khalti implements Payment 
// {
//     public function pay(){
// return "Payment made through Khalti.";
// }
// }

// $eSewa= new Esewa();
// echo $eSewa->pay();

// $khalti = new Khalti();

// echo $khalti->pay();

//Practice 3 

interface PaymentGateway
{
    public function pay($amount);
}

class EsewaGateway implements PaymentGateway
{
    public function pay($amount) {
        return "Paid Rs. " . $amount . " through eSewa.";
    }
}

class KhaltiGateway implements PaymentGateway
{
    public function pay($amount){
        return "Paid Rs. " . $amount . " through Khalti." ;
    }
}

$eSewa = new EsewaGateway();

echo $eSewa->pay(500);

$khalti = new KhaltiGateway();

echo $khalti->pay(1000);
