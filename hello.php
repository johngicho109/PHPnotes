<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting user</title>
</head>
<body>
    <?php
    $firstName = "Joe";$lastName = "Tech"; // variables are declared using $ sign
    echo "<h1>"."Hello ".$firstName.$lastName."<br></h1>"; // echo acts as a print function
    echo "<h2>Welcome Home</h2>";
    // Data Types: Strings, Number, Float
    $laptops = array("Lenovo","HP","Dell","Asus","Mac");
    echo var_dump($laptops)."<br>";
    echo $laptops[0]."<br>";

    define("PI",3.1342); // define function declares constants
    echo PI."<br>";

    define("friends",["Lizz",19,"Mwolem","Student"]);
    echo friends[0]."<br>";

    

    ?>
</body>
</html>