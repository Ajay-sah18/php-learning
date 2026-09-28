
<?php
session_start();

$_SESSION["name"] = "Ajay";

if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
}
