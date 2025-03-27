<?php // Temperature Converter: Write a script that takes temperature in Celsius or Fahrenheit as input and converts it to the other format using if conditions.?>



<?php
// Function to convert temperature
function convertTemperature($temperature, $unit) {
    if ($unit == "C") {
        // Convert Celsius to Fahrenheit
        $fahrenheit = ($temperature * 9/5) + 32;
        return "$temperature °C is equal to $fahrenheit °F";
    } elseif ($unit == "F") {
        // Convert Fahrenheit to Celsius
        $celsius = ($temperature - 32) * 5/9;
        return "$temperature °F is equal to $celsius °C";
    } else {
        return "Invalid unit. Please use 'C' for Celsius or 'F' for Fahrenheit.";
    }
}

// Example usage
$temperature = 100; // Change this value to test different temperatures
$unit = "C"; // Change to "F" to convert Fahrenheit to Celsius
echo convertTemperature($temperature, $unit);
?>
