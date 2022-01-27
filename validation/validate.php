<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{color: red;}
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Please Enter a valid name";
        }else{
            $name = test_input($_POST["name"]);
            if(!preg_match("^[a-zA-Z-']*$/",$name)){
                $nameErr = "Only Letters and white spaces are allowed.";
            }
        }
    }

    if(empty($_POST["email"])){
        $emailErr == "Valid Email Address";
    }else{
        $email = $test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "This Email address is incorrect";
    }
    }

    if(empty($_POST["website"])){
        $website = "";
    }else{
        $website = test_input($_POST["website"]);
        if(!preg_match("/(?i)\b((?:https?://|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/", $website)){
            $websiteErr = "Enter a Valid website url";
        }
    }

    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr = "Please select a valid gender";
    }else{
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Script</h2>
    <p><span class="Error">required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER_METHOD["PHP_SELF"])?>" method="post">
    Fullname: <input type="text" name="name">
    <span class="error"><?php echo $nameErr?></span> <br> <br>
    E-mail : <input type="email" name="email">
    <span class="error"><?php echo $emailErr?></span> <br> <br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr?></span> <br> <br>
    Comment: <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    Gender:
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <span class="error"><?php echo $genderErr?></span> <br> <br>
    <input type="submit" name="submit" value="submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name."<br>";
    echo $email."<br>";
    echo $website."<br>";
    echo $comment."<br>";
    echo $gender."<br>";
    ?>
</body>
</html>