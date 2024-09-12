<?php
$pr = 101;

if ($pr >= 80 && $pr <=100){
    echo "You're in Merit!";
}
elseif ($pr >= 60 && $pr <=79){
    echo "You're in 1st Division!";
}
elseif ($pr >= 45 && $pr <=59){
    echo "You're in 2nd Division!";
}
elseif ($pr >= 33 && $pr <44){
    echo "You're in 3rd Division!";
}
elseif ($pr < 33){
    echo "Sorry, you're Failed!";
}
else {
    echo "Please enter a valid percentage...";
}
?>