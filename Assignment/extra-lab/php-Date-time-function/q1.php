<?php //Time Difference: Write a script that calculates the time difference between two dates (e.g., "today" and "next birthday").?>


<?php
$today =new DateTime();
$nextBirthaday = new DateTime('2000-06-10');
echo "<br>";
$interval = $today->diff($nextBirthaday);
echo "Time difference between today and next birthday: ";
echo $interval->format('%y years, %m months, %d days');


?>