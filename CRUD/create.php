<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            First Name: <input type="text" name = "firstname" required><br><br>
            Last Name: <input type="text" name = "lastname" required><br><br>
            Email: <input type="email" name = "email" required><br><br>
            Password: <input type="password" name = "password" required><br><br>
            Gender:<br> <input type="radio" name = "gender" value="Male" required>Male<br><br>
                        <input type="radio" name = "gender" value="Female" required>Female<br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    <?php
    include "config.php";
    if($_POST["submit"]){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
    }
    $sql = "INSERT INTO 'mydb'('firstname','lastname','email','password','gender') VALUES ('$firstname','$lastname','$email','$password','$gender')";
    $result = $conn -> query($sql);
    if($result == true){
        echo "New Record Created Successfully.";
    }else{
        echo "Error".$sql."<br>".$conn -> error;
    }
    $conn -> close();
    ?>
    
</body>
</html>