<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
</head>
<body>
    <h1>Get method</h1>
    <form action="<?php $_PHP_SELF ?>" method="get">
        Name: <input type="text" name = "name"> <br>
        Age : <input type="number" name = "age">
        <button type="submit">Submit</button>
    </form>
    
    <?php
    if(isset($_GET["name"])  || isset($_GET["age"])){
        echo " Hae, ".$_GET['name']."<br>";
        echo "You are aged ".$_GET["age"]."Years"."<br>";
    }
    ?>
</body>
</html>