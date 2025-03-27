<?php //Chessboard Pattern: Use a nested loop to create a chessboard pattern (8x8 grid).?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: 100px;
            border: 3px solid black;
            padding: 30px;
        }
        .chessdoar{
            height:400px;
            width: 400px;
            margin-left:100px;
            margin-top:100px;
            border:2px solid black;
            
        } 
        .blackdiv{
            height:50px;
            width: 50px;
            background-color:black; 
            color:white;
            float:left;
        }
        .whitediv{
            height:50px;
            width: 50px;
            background-color:white;
            color:black;
            float:left;
        }
        
    </style>
</head>
<body>
 <div class="chessdoar">
 <?php
     $c=0;
     for($i=1;$i<=8;$i++){
         for($j=1;$j<=8;$j++){
             if($c%2==0 ){
                 echo "<div class='whitediv'></div>";
             }
             else{
                 echo "<div class='blackdiv'></div>";
             }
             $c = $c+1;

         }
         $c=$c+1;
         echo"<br>";
     }
 ?>
</div>
</body>
</html>