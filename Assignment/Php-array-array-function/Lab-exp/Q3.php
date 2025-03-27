<?php // 3. Create an associative array for user details (name, email, age) and display them ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $user=["Name"=>"Ravi doe","email"=>"ravi@.com","age"=>24];
    

     echo "Name :".$user["Name"]."<br>";
     echo "Email :".$user["email"]."<br>";
     echo "Age :".$user["age"]."<br>";
    ?>
    <?php
    echo "<h1>Array user to Associative :</h1>";
    echo "<br>";
    echo "<pre>";
    //  array print use to print_r:
    print_r($user)
    
    ?>
</body>
</html>