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
    function return_value($number1, $number2){
        $sum = $number1 + $number2;
        return $sum . "<br>";
    }

    $result = return_value(12, 12);
    echo $result;

    $result = return_value(32, 52);
    echo $result;

    $result = return_value(560, 345);
    echo $result;

    $result = return_value(1234, 3);
    echo $result;

    ?>
</body>
</html>