<?php
$x = 1;
// We can use HTML as below in loop/in PHP:
echo "<h1>";
echo "<ul>";
while ($x <= 10) {
    echo "<li>$x - Hello World!</li>";
    $x += 2;
}
echo "</ul>";
echo "</h1>";
?>