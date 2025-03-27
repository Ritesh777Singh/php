<?php // Write a PHP program to determine if a number is even or odd using if conditions. ?>

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
       <h1>ckeck given number is even or odd</h1>
       <label for="">enter the number</label>
       <input type="text" name="num" id="">
       <input type="submit" value="submit" name="submit">
       <br>
    <?php 
       if(isset($_POST['submit'])){
            $num=$_POST['num'];
            if($num % 2==0){
                echo "given number is even";
                }
            else{
                echo "given number is odd";
                }
       }
    ?>

    </form>
</body>
</html>