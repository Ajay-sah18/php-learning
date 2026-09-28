<?php

session_start();

$_SESSION["username"] = "Ajay";
$_SESSION["course"] = "PHP";

echo $_SESSION["username"];

$_SESSION = [];

session_destroy();

echo "<br>You have been logged out.";