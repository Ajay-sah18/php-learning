<?php
session_start();

$_SESSION["username"] = "Ajay";
echo $_SESSION["username"];

session_destroy();

echo "<br>Session Destroyed.";