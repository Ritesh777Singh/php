<?php // Day Finder: Write a script that finds the current day. If it is Sunday, print "Happy Sunday."?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Day Finder</h1>
<?php

$dayOfWeek = date("l"); 
if ($dayOfWeek == "Sunday") {
    echo "Happy Sunday!";
} else {
    echo "Today is " .$dayOfWeek;
}
?>


    
</body>
</html>