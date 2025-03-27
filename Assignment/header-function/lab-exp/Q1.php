<?php // Redirect users to another page using the header() function.?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "post">
        <label for="">Download files</label>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php 
if(isset($_REQUEST['submit'])){
    header("content-type; application/pdf");
    header("content-Disposition:attachment;filename=download.pdf");
    readfile("Jacqueline Thompson.pdf");
}
?>