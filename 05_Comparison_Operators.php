<?php
$a = 10;
$b = 10.0;
echo $a == $b, "<hr>"; // equal to 
echo $a === $b, "<hr>"; // equal to and equal datatype

$c = 10;
$d = 5;
echo $c >= $d, "<hr>"; //Greater than or equal to 
echo $c != $d, "<hr>"; //Not equal to 
echo $c <> $d, "<hr>"; //Not equal to 

$e = 50;
$f = 40;
echo $e !== $f, "<hr>"; //not equal value or not equal datatype

// echo $g <=> $h;//Spaceship operator
// //It retuns -1, 0, 1 respectively less than, equal, greater than 
$g = 5;
$h = 10;
// if 'g' value is less than that of 'h', it will return -1,
$g = 5;
$h = 5;
// if 'g' value is equal to that of 'h', it will return 0,
$g = 10;
$h = 5;
// if 'g' value is less than that of 'h', it will return -1,

echo $g <=> $h;
?>