<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "lgn";

    $conn =new mysqli($serverName,$userName,$password,$dbName);
    if($conn){
        echo "Connection Failed";
    }
?>