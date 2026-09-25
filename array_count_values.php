<?php
// array_count_values() counts how many times each value appears in an array.

//Practice 1

$languages = ["PHP", "Java", "PHP", "Python", "Java", "PHP"];

print_r(array_count_values($languages));

//Practice 2

$results = ["Pass", "Fail", "Pass", "Pass", "Fail", "Pass"];

print_r(array_count_values($results));

//Practice 3

$statuses = ["Pending", "Approved", "Rejected", "Pending",
"Approved", "Pending", "Rejected", "Pending"];

print_r(array_count_values($statuses));