<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    include "config.php";
    $sql = "SELECT *FROM mydb";
    $results = $conn -> query($sql);
    ?>

    <div class="container">
        <h1>Users</h1>
        <table class="table">
            <head>
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </head>
            <tbody>
                <?php
                if($results -> num_rows > 0){
                    while($row = $results -> fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp; <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>

                <?php    }
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
