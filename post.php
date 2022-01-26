<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>
    <h1>Post Method</h1>
    <form action="<?php $_PHP_SELF?>" method="post">
    Name: <input type="text" name="name">
    age : <input type="number" name="age">
    <button type="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST["name"]) || isset($_POST["age"])){
        echo " Hae, ".$_POST['name']."<br>";
        echo "You are aged ".$_POST["age"]."Years"."<br>";
    }
    ?>
</body>
</html>