<?php
if($_SERVER["REQUEST_METHOD"] || isset($_POST["submit"])){
$conn = mysqli_connect("localhost","root","","blood_donation") or die("Connection failed");
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["bgroup"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $bgroup = $_POST["bgroup"];

    $sql = "INSERT INTO  `users` (`name`,`email`,`phone`,`bgroup`) VALUES('$name','$email','$phone','$bgroup')";

    $query = mysqli_query($conn,$sql);
    if($query){
        echo "Entry Successfull";
    }else{
        echo "Error Occured";
    }
}
}
?>