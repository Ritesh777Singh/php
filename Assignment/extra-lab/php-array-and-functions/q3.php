<?//Array Merge and Diff: Write a PHP script that merges two arrays and finds the difference between them using array_merge() and array_diff().?>


<?php 
$array1 = array("apple","banana","cherry","date");
$array2 = array("banana","date","fig","grape");

$mergedarray = array_merge($array1,$array2);
echo "merged array: ";
print_r($mergedarray);
echo "<br>";

$differencearray = array_diff($array1,$array2);
echo "Difference (Elements in array1 but not in array2: ";
print_r($differencearray);
?>