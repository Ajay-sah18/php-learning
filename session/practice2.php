<?php

session_start();

if(isset($_SESSION["username"])){
    echo "Username Exists.";
} else {
    echo "Username not found.";
}