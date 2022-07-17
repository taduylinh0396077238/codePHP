<?php
$x = 5;
function Test() {
    echo "Following line shows an error since variable x is declared outside the function";
    echo "<p>Variable x inside funciton is : $x error </p>";
}
Test();
echo "<p>Variable x inside funciton is : $x error </p>"
?>
