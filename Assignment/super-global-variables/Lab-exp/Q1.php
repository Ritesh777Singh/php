<?php //Create a form that takes a user's name and email use the $_POST super global to dispaly the entered data.?>

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
    <form action="" method="post">
        <label for=""> enter the username </label>
        <input type="text" name="user" id="">
        <br><br>
        <label for="">enter the email</label>
        <input type="email" name="email" id="">
        <br>
        <input type="submit" value="submit" name="submit">

        <?php 
        if(isset($_POST['submit'])){
            $user=$_POST['user'];
            $email=$_POST['email'];
        
            echo"<h1>".$user."</h1>";
            echo "<h1>".$email."</h1>";
        }
        ?>
    </form>
</body> 
</html>