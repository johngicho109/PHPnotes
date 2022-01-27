<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <?php
    $firstname = $email = $gender = $comment = $number = $age = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = test_input($_POST["fullname"]);
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        $age = test_input($_POST["age"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Full Name : <input type="text" name="fullname"> <br>
        E-mail : <input type="email" name="email">
        comment : <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        Age: <input type="number" name="age">
        Gender: <br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        Number: <input type="text" name="number"> <br>
        <input type="submit" name="click here" value="click here">
    </form>
    <?php
    echo "<h2>Your Input:</h2> <br>";
    echo $fullname."<br>";
    echo $email."<br>";
    echo $age."<br>";
    echo $comment."<br>";
    echo $number."<br>";
    echo $gender."<br>";
    ?>
</body>
</html>