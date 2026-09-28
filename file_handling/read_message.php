<?php
//fread - manually open -> read -> close

// $file = fopen("hello.txt", "r");

// $message = fread($file, filesize("hello.txt"));

// fclose($file);

// echo "Message from file: <br>" . $message;

//file_get_contents - give me the whole file.
$message = file_get_contents("hello.txt");

echo "My File Message:<br>" . nl2br($message);