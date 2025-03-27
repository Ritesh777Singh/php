<?php // Create a PHP script to declare and initialize diggerent types of variables ( integer,float,string,boolean) display them using echo ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">enter your variables</label>
        <input type="text" name="var" id="">
        <br><br>
        <input type="submit" value="submit" id="submit">

        <?php 
           if(isset($_POST['submit'])){
            $var=$_POST['var'];
             var_dump($var);

            echo "<h1>" .$var."</h1>";
           }
        ?>

    </form>
</body>
</html>