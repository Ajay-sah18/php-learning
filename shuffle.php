<?php 
// shuffle() - randomly rearranges the element of an array.

//Practice 1
$programmingLanguages = ["PHP", "Java", "Python", "JavaScript", "C#", "C++"];

shuffle($programmingLanguages);

print_r($programmingLanguages);

//Practice 2
$jobs = ["PHP Developer", "Laravel Developer", "QA Tester", "Data Analyst", "Web Designer"];

shuffle($jobs);

print_r($jobs);

//Practice 3
//Randomly display features jobs.
$randomJobs = ["Senior PHP Developer", "Junior Laravel Developer",
 "QA Engineer", "Data Analyst", "Frontend Developer", "Backend Developer"];

 shuffle($randomJobs);

 print_r($randomJobs);