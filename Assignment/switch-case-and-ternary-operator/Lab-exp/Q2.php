<?php  //2. Ternary Operator Example: Write a script using the ternary operator to display a message if the age is greater than 18.?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator Example</title>
    <style>
        form{
            border: 3px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="age">Enter Your Age:</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Submit</button>
    
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];
        $message = ($age > 18) ? "You are eligible!" : "You are not eligible.";
        echo "<h3>$message</h3>";
    }
    ?>
    
    
    </form>
</body>
</html>
