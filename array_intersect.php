<?php

$mySkills = ["PHP", "HTML", "CSS", "Javascript", "MySQL", "Laravel"];

$jobSkills = ["PHP", "Laravel", "MySQL", "Python"];

$result = array_intersect($mySkills, $jobSkills);

print_r($result);