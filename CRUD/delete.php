<?php
include "config.php";

if(isset($_GET["id"])){
    $userId = $_GET["id"];

    $sql = "DELETE FROM 'mydb' WHERE 'id = $userId' ";
    $result = $conn -> query($sql);

    if($result == TRUE){
        echo "Record Deleted successfully";
    }else{
        echo "Error".$sql."<br>".$conn -> error;
    }
}
?>