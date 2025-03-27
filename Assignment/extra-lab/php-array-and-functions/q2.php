<?php //Multi-dimensional Array: Create a multi-dimensional array to store information about products (name, price, and stock). Write a script to display the information in a tabular format.?>
<?php 
$products = array(
    array("name" => "laptop","price" =>800,"stock" => 10),
    array("name" => "smartphone","price" =>500,"stock" => 20),
    array("name" => "tablet","price" =>300,"stock" => 15),
    array("name" => "smartwatch","price" =>200,"stock" => 25)
);

echo "<table border='1' >";
echo "<tr>
      <th>name</th>
      <th>price ($)</th>
      <th>stock</th>
      </tr>";
foreach ($products as $product){
    echo "<tr>";
    echo"<td>" . $product["name"] ."</td>";
    echo"<td>" . $product["price"] ."</td>";
    echo"<td>" . $product["stock"] ."</td>";
    echo "</tr>";
}
echo "</table>";
?>