<?php
echo "<a href=\"./\">BACK</a>";

/* 7. --- OPERATOR ---
 *
 * Operators are used to perform operation on variables and values.
 *
 * Group of operators:
 * Arithmetic operators
 * Assignment operators
 * Comparison operators
 * Increment/Decrement operatos
 * Logical operators
 * String operators
 * Array operatos
 *
 */

echo "<h1>7. OPERATORS</h1>";

/*
 * EXERCISE 1 : Using each of operators at least once.
 */

/*
 * SUGGESTION :
 * Can be watch more at : https://www.w3schools.com/php/php_operators.asp
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$x = 1;
$y = 2;
echo $x + $y;
// Arithmetic Operators
echo "<br>";
$x = 10;
echo $x;
// Assignment Operators
echo "<br>";
$x = 15;
$y = 15;
var_dump($x == $y);
// Comparison Operators
echo "<br>";
$x = 10;
echo ++$x;
// Increment / Decrement Operators
echo "<br>";
$x = 10;
$y = 5;
if ($x == 10 and $y == 15) {
    echo "Logical Operators";
}
// Logical Operators
echo "<br>";
$tx1 = "truong";
$tx2 = "hiep";
echo $tx1 . $tx2;
// String Operators
echo "<br>";
$x = array("a" => "1", "b" => "2");
$y = array("c" => "3", "d" => "4");
print_r($x + $y);
// Array Operators
echo "<br>";
?>



