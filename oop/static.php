<?php

//Practice 1 - In oop static property

// class Company 

// {
//  public static $name = "Tech Solutions";

//  public static function showCompany() {
//     return self::$name;
//  }
// }

//  echo Company::showCompany();

 //Practice 2

 class Counter 
 {
    public static $count = 0;

    public static function increment( ){
         self::$count++;
    }
    public static function showCount(){
        return self::$count;
    }
 }

 echo Counter::increment();
 echo Counter::increment();
 echo Counter::increment();

 echo Counter::showCount();

 // Practice 3

 class Student 
 {
    public static $school = "ABC College";

    public static function showSchool(){
        return self::$school;
    }
    public static function changeSchool($newSchool){
         self::$school = $newSchool;
    }
 }

 Student::changeSchool("XYZ College");

 echo Student::showSchool();