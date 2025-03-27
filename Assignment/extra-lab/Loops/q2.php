<?php //Multiplication Table: Write a PHP script using a nested for loop to generate a multiplication table from 1 to 10?>

<?php
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>&times;</th>";
for ($i=1; $i<=10; $i++){
    echo "<th>$i</th>";
}
echo"</tr>";

for($i =1; $i<=10; $i++){
    echo "<tr><th>$i</th>";
    for($j =1; $j <=10;$j++){
        echo "<td>" .($i*$j). "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>