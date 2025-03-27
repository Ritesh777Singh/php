<?php //1. For Loop: Write a script that displays numbers from 1 to 10 on a single line ?>

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
        <h1>1 to 10 on a single line</h1>
        <label for="">enter the number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="submit" name="submit">
        <br><br>
        
        <?php 
        if(isset($_POST['submit'])){
            $num=$_POST['num'];
            for($i=0;$i<10;$i++){
                echo "<p>";
                echo "".$num+$i;
                echo "</p>";
               
               
            }
        }
        
        ?>
    </form>
</body>
</html>