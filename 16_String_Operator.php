<?php
// $a = "Hello";
// $a .= " World";
// $a .= " Beautiful";
// echo $a;
$day = 01;
$month = 12;
$year = 1994;

echo "<h1>Birthdate is: $day - $month - $year</h1><hr>";
echo "Birthdate: " . $day . " - ". $month . " - " . $year . "<hr>";
echo sprintf('%02d', $day) . " - ". $month . " - " . $year . "<hr>" ; //for leading zeros
?>