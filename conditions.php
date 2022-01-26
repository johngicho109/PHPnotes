<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 16;
    if($age > 18){
        echo "An Adult of age ".$age;
    } else{
        echo "A child aged ".$age;
    }

    $number = 3;
    if($number % 2 == 0 && $number % 3 == 0){
        echo "Number is divisible by 2 and 3";
    }elseif($number % 2 == 0){
        echo"Number is divisible by 2";
    }elseif($number % 3 == 0){
        echo"Number is divisible by 3";
    }
    else{
        echo "Number not divisible by 2 or 3";
    }

    $level = 20;
    switch ($level){
        case 1:
            echo "Easy Level";
            break;
        case 2:
            echo "Mediam Level";
            break;
        case 3:
            echo "Hard Level";
            break;
        case 4:
            echo "Extremely Hard Level";
            break;
        default:
            echo "Level Not Defined";
    }
    ?>
</body>
</html>