<?php

$firstName = "Ajay";
$lastName = "Sah";

function fullName() 
{
    echo $GLOBALS['firstName'] . PHP_EOL;
    echo $GLOBALS['lastName'] . PHP_EOL;
}

fullName();

$product = "Laptop";
$price =  80000;

function showProduct() 
{
    echo "Product: " . $GLOBALS['product'] . PHP_EOL;
    echo "Price: " . $GLOBALS['price'] . PHP_EOL;
}

showProduct();