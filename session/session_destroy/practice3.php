<?php

session_start();

$_SESSION["username"] = "Ajay";

if(isset($_SESSION["username"])){
    echo "Welcome" . $_SESSION["username"];
} 

session_destroy();
echo "<br>User Logout";