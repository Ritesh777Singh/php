<?php // For Loop (Addition): Add all integers from 0 to 30 and display the total.?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: 100px;
            border: 3px solid black;
            padding: 30px;
            width: 50%;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="">enter the number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="submit" name="submit">
        <br><br>
        <?php 
        if(isset($_POST['submit'])){
            $num=$_POST['num'];
            $sum=0;
            for($i=0;$i<=30;$i++){
                echo "<p>";
                echo "".$i;
                $sum += $i;
                echo"</p>";
            }
            echo "sum total = " .$sum;
        }
        
        ?>
    </form>
</body>
</html>