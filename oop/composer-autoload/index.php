<?php


require "vendor/autoload.php";
 use Ajay\ComposerAutoload\User;


$user = new User();

echo $user->show() . PHP_EOL;

require "vendor/autoload.php";
 use Ajay\ComposerAutoload\Admin;

 $admin = new Admin();

 echo $admin->show() . PHP_EOL;

 require "vendor/autoload.php";

 use Ajay\ComposerAutoload\Models\Product;

 $product = new Product();

 echo $product->show() . PHP_EOL;

 require "vendor/autoload.php";

 use Ajay\ComposerAutoload\Services\EmailService;

 $email = new EmailService();

 echo $email->send();