<?php

// file_put_contents("hello.txt", "Hello, I am learning PHP.\nFile handling is interesting.");
// file_put_contents("hello.txt","\nI am practicing PHP every day.", FILE_APPEND);

//  echo "Data appended successfully";

$content = file_get_contents("hello.txt");

$content = $content . "\nPHP is my first step toward Laravel.";

file_put_contents("hello.txt", $content);

echo "file updated successfully.";
