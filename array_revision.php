<?php

$numbers = [2, 4, 6, 8 ,10];

$multiplication = array_map(fn($num) => $num * 3, $numbers);

print_r($multiplication);

//Practice 2

$prices = [100, 250, 150, 300];

$totalPrice = array_reduce(
    $prices,
    fn($total , $price) => $total + $price
); 

print_r($totalPrice);


//Practice 3

$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

print_r(array_slice($fruits, 1, 2));

print_r(array_splice($fruits, 2, 2));

print_r($fruits);