<?php //Type Casting: Write a script that declares variables of different types and converts them into other types (e.g., integer to float, string to integer). Display the type and value before and after the conversion?>


<?php

$intVar = 42;
$floatVar = 3.14;
$doubleVar = 9.876;
$charVar = 'A';
$strVar = "123";

echo "Original values and types:";
echo "<br>";
echo "intVar: $intVar (" . gettype($intVar) . ")";
echo "<br>";
echo "floatVar: $floatVar (" . gettype($floatVar) . ")";
echo "<br>";
echo "doubleVar: $doubleVar (" . gettype($doubleVar) . ")";
echo "<br>";
echo "charVar: $charVar (" . gettype($charVar) . ")";
echo "<br>";
echo "strVar: $strVar (" . gettype($strVar) . ")";
echo "<br>";

$intToFloat = (float)$intVar;
echo "<br>";
$floatToInt = (int)$floatVar;
echo "<br>";
$charToInt = ord($charVar);
echo "<br>";
$strToInt = (int)$strVar;
echo "<br>";

echo "Converted values and types:";
echo "<br>";
echo "intToFloat: $intToFloat (" . gettype($intToFloat) . ")";
echo "<br>";
echo "floatToInt: $floatToInt (" . gettype($floatToInt) . ")";
echo "<br>";
echo "charToInt: $charToInt (" . gettype($charToInt) . ")";
echo "<br>";
echo "strToInt: $strToInt (" . gettype($strToInt) . ")";

?>
