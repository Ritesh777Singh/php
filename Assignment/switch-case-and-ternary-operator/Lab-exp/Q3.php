<?php //3. Color Selector: Write a program to display the name of a color based on user input (red, green, blue).?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Selector</title>
    <style>
        form{
            border: 3px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h3></h3>
    <form action="" method="post">
        <fieldset>
            <legend>Select a Color</legend>
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
        <input type="submit" value="submit" name="submit">
    
    <?php
        if ( isset($_POST['submit'])) {
        $color = $_POST['color'];
        echo "<h3>You selected the color: " . $color. "</h3>";
        }
    ?>
    </fieldset>
    </form>
</body>
</html>
