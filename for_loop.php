<?php
$skills = ["PHP", "Laravel", "Git", "Linux", "SQL"];
$skills[] = "Javascript";
for($i = 0; $i < count($skills); $i++){
    echo "skill " . ($i + 1) . ": " . $skills[$i]. PHP_EOL;

}
?>