<?php // Write a script to display the current date and time in different formats.?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 3px solid black;
            padding: 10px;
        }
    </style>
</head>
<body> 
    <form action="">
    <?php
    $currentDateTime = date("Y-m-d H:i:s");
    
    // Display the current date and time in different formats
    echo "<h3>Current Date and Time in Various Formats:</h3>";
    
    // Format 1: Full date and time
    echo "1. Full date and time (YYYY-MM-DD HH:MM:SS): " . date("Y-m-d H:i:s") . "<br>";
    
    // Format 2: Day-Month-Year
    echo "2. Day-Month-Year: " . date("d-m-Y") . "<br>";
    
    // Format 3: Month/Day/Year
    echo "3. Month/Day/Year: " . date("m/d/Y") . "<br>";
    
    // Format 4: Full textual representation of the day
    echo "4. Full day and date: " . date("l, F j, Y") . "<br>";
    
    // Format 5: 12-hour format with AM/PM
    echo "5. 12-hour time with AM/PM: " . date("h:i A") . "<br>";
    
    // Format 6: 24-hour format
    echo "6. 24-hour time: " . date("H:i") . "<br>";
    
    // Format 7: ISO 8601 format
    echo "7. ISO 8601 format: " . date("c") . "<br>";
    
    // Format 8: Unix timestamp
    echo "8. Unix timestamp: " . time() . "<br>";
    ?>
    </form>
</body>
</html>
