<?php
// Defining variable

echo "PHP automatically defines datatypes from its values.<hr>";
$a = "Hello World!"; //This is a string

// $a = Hello World; Shows Error

$a = 25; //This is numeric value

$a = "25"; //This is a string as it is written in double quotes.

$a = -25; //We can write negative values also.

$a = 25.40; //This is decimal/floating-point value

$a = "C ";
$a = 'C'; //Character datatype
// NOTE: BOTH SINGLE QUOTES AND DOUBLE QUOTES WORK, BUT GENERALLY, FOR CHARACTER DEFINING, WE USE SINGLE QUOTES('')

$a = true; //Boolean datatype
$a = false; //Boolean datatype

$a = "Hello World! Welcome to the World of PHP Programming...<hr>";
echo $a;
var_dump($a); //To check datatype and it's value
echo "<hr>";
$a = array("HTML", "CSS", "JS", "MongoDB", "React");
// print_r($a);
echo $a[3], "<hr>";
echo $a[3] . "<hr>";
$a = null;
echo $a;

?>