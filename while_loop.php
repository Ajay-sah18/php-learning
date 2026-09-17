<?php

// $i = 1;
 
// while ($i <= 5){
//     echo "Day" .  $i . ": " ." Learning PHP" . PHP_EOL;
//     $i++;
// }

$skills = ["PHP", "Laravel", "Git", "Linux", "SQL", "Javascript"];

$i = 0;

while($i < count($skills)) {
    echo $skills[$i] . PHP_EOL;
    $i++;
}