<?php //Embedding HTML and PHP: Create a web page that uses PHP to dynamically generate HTML content (e.g., a table with user information using PHP).?>


<?php  
    $users=[
        ["name" =>"ravi","email" => "ravi@gemail.com","age" => 24],
        ["name" =>"bob","email" => "bob@gemail.com","age" => 25],
        ["name" =>"riya","email" => "riya@gemail.com","age" => 28],
    ];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           font-family: arial,sans-serif;
           margin:20px;
           text-align: center;
        }
        table{
            width:50%;
            margin: auto;
            border-collapse:collapse;
        }
        th,td{
            border: 1px solid #ddd;
            padding: 10px;
        }
        th{
            background-color: #f4a261;
            color: white;
        }
        tr:nth-child(even){
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2>user information</h2>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>age</th>
        </tr>
        <?php 
        
        foreach($users as $user){
            echo "<tr>";
            echo "<td>{$user['name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td>{$user['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>