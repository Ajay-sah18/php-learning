<?php

//Create Cookie
setcookie("student", "Ajay");
echo "Cookie created<br>";

setcookie("course", "PHP", time() + 3600);
echo "Course cookie created";

//Delete cookie
// setcookie("course", "", time() - 3600);
// echo "Course cookie deleted";