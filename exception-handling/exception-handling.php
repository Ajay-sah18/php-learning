<?php

// try {
//     throw new Exception("Something went wrong!");
// } catch (Exception $e) {
//    echo "Error:" . $e->getMessage();
// }

// //Practice 2

// $num1 = 10;
// $num2 = 0;

// try {
     
//     if($num2 == 0){
//     throw new Exception("Cannot divide by zero!");
// } 
// $result = $num1 / $num2;

// echo "Result: " . $result;

// } catch (Exception $e) {
//     echo "Error:" . $e->getMessage();
// }

//Practice 3

// $age = 15;

// try{
//     if($age < 18){
//         throw new Exception("You must be 18 or older!");
//     } 
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }

//Practice 4

// $username = "";

// try{
//     if($username == ""){
//         throw new Exception("Username cannot be empty!");
//     }
// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }

//Practice 5

// $balance = 500;
// $withdraw = 700;
// try {
//     if($withdraw > $balance){
//         throw new Exception("Insufficient balance!");
//     }
//     echo "Withdrawal successful!";

// } catch (Exception $e) {
//     echo "Error: " . $e->getMessage();
// }

// "Finally" Exception handling.

//Practice 1
// $number = 10;

// try{
//     if($number > 5) {
//         throw new Exception("Number is too large!");
//     }
// } catch(Exception $e){
//     echo $e->getMessage();
// } finally {
//     echo "Checking is completed";
// }

//Practice 2

// $number = 3;

// try{
//     if($number > 5) {
//         throw new Exception("Number is too large!");
//     }

// } catch(Exception $e){
//     echo $e->getMessage();
// } finally {
//     echo "Checking is completed.";
// }

//Custom Exception Handling

//Practice 1

// class InvalidPasswordException extends Exception {

// }

// $password = "123";

// try{
//     if(strlen($password) < 6) {
//         throw new InvalidPasswordException("Password must be at least 6 characters!");
//     } 
//     echo "Password is Valid!";
// } catch (InvalidPasswordException $e) {
//     echo "Error: " . $e-> getMessage();
// }

//Practice 2

// class InvalidAgeException extends Exception {

// }

// $age = 25;

// try{
//     if($age < 18) {
//         throw new InvalidAgeException("You must be 18 or older!");
//     }
//     echo "Access granted!";
// } catch (InvalidAgeException $e){
//     echo "Error: " . $e->getMessage();
// }

//Practie 3

class AgeValidationException extends Exception{

}

$age = 16;

try{
    if($age < 18) {
        throw new AgeValidationException("You are not eligible!");
    } 
    echo "You are eligible!";

} catch(AgeValidationException $e){
    echo "Error: " . $e->getMessage();
} finally {
    echo "Age verification completed.";
}