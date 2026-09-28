<?php 

//Practice 1 - unset(): remove a specifie variable.

session_start();

$_SESSION["name"] = "Abishek";
$_SESSION["age"] = 23;
$_SESSION["course"] = "Laravel";

unset($_SESSION["age"]);

echo $_SESSION["name"];
echo "<br>";
echo $_SESSION["course"];