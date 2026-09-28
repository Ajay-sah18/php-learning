<?php 

$file = fopen("hello.txt", "w");

fwrite($file, "Hello, I am learning PHP File Handling.");
fwrite($file, "\nI want to become a Laravel Developer");
fclose($file);

echo "Data written successfully.";

// echo "File opened and closed successfully";