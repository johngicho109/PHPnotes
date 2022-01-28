<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login form</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php
            if(isset($_GET["error"])){?>
            <p class="error"><?php echo $_GET["error"];?></p>
            <?php } ?>
            <label for="user">User name</label>
            <input type="text" name="uname" placeholder="username" required>
            
            <label for="user">Password</label>
            <input type="password" name="password" placeholder="password" required>
            
            <input type="submit" type="submit" value="Login">
        </form>
    </body>
</html>