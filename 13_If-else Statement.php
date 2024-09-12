<?php
$name = "Chirag Thanki";
$gender = "male";

if ($gender == "male" || $gender == "Male" || $gender == "MALE"){
    echo "Hello Mr. $name...";
}
else{
    echo "Hello Miss $name...";
}
?>