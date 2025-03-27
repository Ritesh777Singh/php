<?php //Custom Date Formats: Create a script that displays the current date in different formats (e.g., Y-m-d, d/m/Y, l, F jS Y).?>


<?php
$currentdate = new DateTime();

echo "Y-m-d format: " .$currentdate->format('Y-m-d') ."<br>";
echo "d/m/Y format: " .$currentdate->format('d/m/Y') ."<br>";
echo "Day of the week (l): " .$currentdate->format('l') ."<br>";
echo "full date with suffix (F jS Y): " .$currentdate->format('F jS Y') ."<br>";
?>

