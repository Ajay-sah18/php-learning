<?php

// $numbers = [2, 3, 4];

// $total = array_reduce(
//     $numbers, 
//     fn($carry, $number) => $carry * $number,
//     1
// );

// echo $total;

$numbers = [5, 10, 15, 20];

$total = array_reduce(
    $numbers, 
    fn($carry, $number) => $carry + $number,
    0
);

echo $total;