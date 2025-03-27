<?php // Simple Calculator: Create a calculator using if-else conditions that takes two inputs and an operator (+, -, *, /). ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        form{
            border: 3px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
     <form action="" method="post">
        <fieldset>
        <legend>Simple Calculator</legend>
        <label for="">Enter First Number:</label>
        <input type="text" name="num1" id="">
        <br><br>
        <label for="">Enter Second Number:</label>
        <input type="text" name="num2" id="">
        <br><br>
        <label for="operator">Select Operator:</label>
        <select name="operator" id="operator">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        <br><br>
        <button type="submit" name="calculate">Calculate</button>
     
        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = null;
    
    
            if ($operator == "+") {
                $result = $num1 + $num2;
            } elseif ($operator == "-") {
                $result = $num1 - $num2;
            } elseif ($operator == "*") {
                $result = $num1 * $num2;
            } elseif ($operator == "/") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero is not allowed.";
                }
            } else {
                $result = "Invalid operator.";
            }
    
            echo "<h3>Result: $result</h3>";
        }
        ?>
        </fieldset>
    </form>
</body>
</html>