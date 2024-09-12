<?php
// WE'RE GOING TO PRINT DAYS OF THE WEEK USING SWITCH-CASE STATEMENT
$DAY = 7;
$name = "Chirag";


// switch ($DAY) {
switch ($name) {
    case "Chirag":
        echo "Hello, $name";
        break;
    case "1":
        echo "Sunday";
        break;
    case "2":
        echo "Monday";
        break;
    case "3":
        echo "Tuesday";
        break;
    case "4":
        echo "Wednesday";
        break;
    case "5":
        echo "Thursday";
        break;
    case "6":
        echo "Friday";
        break;
    case "7":
        echo "Saturday";
        break;

    default:
        echo "Please enter valid input...";
        break;
}
