<?php
include "config.php";
if(isset($_POST["update"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $user_id = $_POST["id"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $sql = "UPDATE 'mydb' SET 'firstname'='$firstname','lastname'='$lastname','email'='$email','gender'='$gender' WHERE 'id' = '$user_id' ";
    $result = $conn -> query($sql);
    if($result = TRUE){
        echo "Record updated successfully";
    }else{
        echo "Error:".$sql."<br>".$conn -> error;
    }
    if(isset($_GET["id"])){
        $user_id = $_GET["id"];
        $sql = "SELECT *FROM 'mydb' WHERE 'id' = '$user_id' ";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $password = $row["password"];
                $gender = $row["gender"];
                $id = $row["id"];
            }
        ?>
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Update Form</h2>
        <form action="" method="post">
            First Name: <input type="text" name="firstname" value="<?php echo $firstname; ?>"> <br>
            Last Name: <input type="text" name="lastname" value="<?php echo $lastname; ?>"> <br>
            Email: <input type="email" name="email" value="<?php echo $email;?>"> <br>
            Password: <input type="password" name="password" value="<?php echo $password; ?>"> <br>
            Gender:<br>
             <input type="radio" name="gender" value="male" <?php if($gender == "male"){echo "checked";}?>>Male <br>
             <input type="radio" name="gender" value="female" <?php if($gender == "female"){echo "checked";}?>>Female <br>

        </form>
</body>
</html>

<?php
        }else{
            header("Location: view.php");
        }
    }
?>