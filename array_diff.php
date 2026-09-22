<?php

// $students = ["Ram", "Shyam", "Hari", "Sita", "Gita"];
// $present = ["Ram", "Hari", "Gita"];

// $result = array_diff($students, $present);

// print_r($result);

$allSkills = ["PHP", "HTML", "CSS", "Javascript", "MySQL", "Laravel", "Git"];
$usedSkills = ["HTML", "CSS", "Git"];
$learningSkills = ["PHP","Javascript"];

$result = array_diff($allSkills, $usedSkills, $learningSkills);

print_r($result);