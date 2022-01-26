<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body{
            background-color: #fbb917;
        }
    </style>
</head>
<body>
   <h1>Register Here</h1>
   <div>
       <h2>Registration Form</h2>
        <form action="connect.php" method="post">
            <label for="user">Name</label>
            <input type="text" name ="name" required>
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" name ="email" required>
            <br>
            <br>
            <label for="phone number">Phone</label>
            <input type="text" name ="phone" required>
            <br>
            <br>
            <label for="blood group">Blood Group</label>
            <input type="text" name="bgroup">
            <br>
            <br>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
   </div> 
   
   <?php
   ?>
</body>
</html>