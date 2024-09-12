<?php
// NOTE: 
// IF YOU WANT TO COMPARE VALUE OF VARIABLE WITH ANOTHER VARIABLE, YOU'LL USE == (DOUBLE EQUAL SIGN).
// BUT IF YOU WANT TO COMPARE VALUES AND DATATYPE ALSO, THEN USE === (TRIPLE EQUAL SIGN).

$x = 100;

if ($x == 100){ //checking only value, here integer
    echo "X is same.<br>";
}
else{
    echo "X is not same.";
}
echo "<hr>";
if ($x === "100"){ //checking value and datatype also, here string
    echo "X is same.<br>";
}
else{
    echo "X is not same.<br>";
}
?>
