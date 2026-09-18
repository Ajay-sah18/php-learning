<?php

// $i = 1;

// do {
//     echo $i . PHP_EOL;
//     $i++;
// } while ($i <= 10);

$skills = ["PHP", "Laravel", "Git", "Linux", "SQL"];

$i = 0;

do {
    echo $skills[$i] .PHP_EOL;
    $i++;
} while ($i < count($skills));