<?php //2. Find and display the number of odd and even elements in an array?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num= [10,15,20,29,30,24,18,23];

        $odd=0;
        $even=0;

        foreach($num as $num){
            if($num % 2 == 0){
                $even++;
            }
            else{
                $odd++;
            }
        }
    echo "number of even : $even";
    echo"<br>";
    echo "number of odd : ".$odd;
    ?>
</body>
</html>