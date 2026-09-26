<?php

//Practice 1

// $student = [
//     "name" => "Ajay",
//     "age" => 23,
//     "address" => [
//         "city" => "Biratnagar",
//         "country" => "Nepal"
//     ],
//     "subject" => [
//         "PHP" => 85,
//         "MySQL" => 80,
//         "Git" => 90
//     ]
// ];

// array_walk_recursive($student, function($value, $key) {
//     echo "$key : $value ";
// });

//Practice 2 
// $jobs = [
//    "webDeveloper "=> [
//     "title" => "Junior Developer",
//     "company" => "IT Solutions Nepal",
//     "location" => "Biratnagar",
//     "skills" => ["PHP", "Laravel"]
//    ],
//    "AppDeveloper" => [
//     "title" => "App Developer",
//     "company" => "Infinite Nepal",
//     "location" => "Kathmandu",
//     "skills" => ["Kotlin", "Java"]
//    ],
//    "QA" => [
//     "title" => "Software Testing",
//     "company" => "abc Nepal",
//     "location" => "Janakpur",
//     "skills" => ["Manual Testing", "Selenium"]
//    ]
// ];

// array_walk_recursive($jobs, function($value, $key){
//     echo "$key : $value ";
// });

//Practice 3
$jobs = [
   "webDeveloper "=> [
    "title" => "  Junior PHP Developer  ",
    "company" => "  IT Solutions Nepal ",
    "location" => "  Biratnagar  ",
    "skills" => " PHP  "
   ],
   "AppDeveloper" => [
    "title" => " App Developer ",
    "company" => "  Infinite Nepal  ",
    "location" => "  Kathmandu ",
    "skills" => "  Kotlin  "
   ]
];


array_walk_recursive($jobs, function(&$value, $key){
   $value = trim($value);

   echo "$key : $value" . PHP_EOL; 
});
 
