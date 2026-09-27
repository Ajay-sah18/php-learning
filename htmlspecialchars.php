<?php
//Practice 1
// $greeting = "<b> Hello PHP </b>";

// $result = htmlspecialchars($greeting);

// echo $result;

// //Practice 2

// $language = "<h1>PHP Developer</h1>";

// echo $language;

//  $result = htmlspecialchars($language);
//  echo $result;

//Practice PHP Null Coalescing Operator ?? - it's work like "Use the first value if exists; otherwise use the second value.
// $username;
// $username = "Ajay";
// echo $username ?? "Guest";

// $city = "Biratnagar";
// echo $city ?? "Unknown City";


//Practice isset()
$name = "Ajay";

isset($name);
echo $name;
var_dump(isset($name));

$city = "";

var_dump(isset($city));
var_dump(empty($city));