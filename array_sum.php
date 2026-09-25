<?php
// array_sum() calculates the total of all numeric values in an array.
//  It returns an integer or float.

//Practice 1

$numbers = [10, 20, 30, 40, 50];

$totals = array_sum($numbers);

echo $totals;


//Practice 2

$monthlyExpenses =[5000, 3000, 2500, 1500];

$totalExpenses = array_sum($monthlyExpenses);

echo $totalExpenses;

//Practice 3

$expenses = [
    "food" => 500,
    "transport" => 300,
    "internet" => 1000
];

print_r(array_sum($expenses));