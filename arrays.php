<?php
// $languages = ["PHP", "Laravel", "Javascript"];

// echo $languages[0] . PHP_EOL;
// echo $languages[1] . PHP_EOL;
// echo $languages[2] . PHP_EOL;

$fruits = ["Apple", "Mango", "Banana"];
$fruits[] = "Orange";

echo $fruits[0] . PHP_EOL;
echo $fruits[1] . PHP_EOL;
echo $fruits[2] . PHP_EOL;
echo $fruits[3] . PHP_EOL;

echo "Total Fruits: " . count($fruits) . PHP_EOL;
?>