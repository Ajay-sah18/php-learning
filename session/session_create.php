<?php

session_start();

$_SESSION["name"] = "Ajay";
$_SESSION["course"] = "PHP";

echo "Session data stored.";