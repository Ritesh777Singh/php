<?php //Sorting Arrays: Write a script that demonstrates the use of sort(), rsort(),asort(), and ksort() functions to sort arrays. ?>


<?php 
$num=array(4,5,7,8,9,3);
$as_array=array("b"=>5,"a"=>9,"c"=>3,"e"=>7,"d"=>1);

sort($num);
echo "sorted in ascending order (sort): ";
print_r($num);
echo "<br>";

rsort($num);
echo "sorted in descending order (rsort): ";
print_r($num);
echo "<br>";

asort($as_array);
echo "sorted by values in ascending order (asort): ";
print_r($as_array);
echo "<br>";

ksort($as_array);
echo "sorted by keys in ascending order (ksort): ";
print_r($as_array);

?>