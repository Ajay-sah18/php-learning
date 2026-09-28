<?php

//Read Cookie
if(isset($_COOKIE["student"])){
    echo "Username : " . $_COOKIE["student"] . "<br>";

} else {
    echo "Username cookie not found. <br>";
}

if(isset($_COOKIE["course"])){
    echo "Course: " . $_COOKIE["course"];
} else {
    echo "Course cookie not found.";
}