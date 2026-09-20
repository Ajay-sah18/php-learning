<?php 
$numbers = [5,10,15,20,25,30];

function greaterless20($number) 
{
    return $number < 20;
}

$filteredNumbers = array_filter($numbers, "greaterThan20");

print_r($filteredNumbers);