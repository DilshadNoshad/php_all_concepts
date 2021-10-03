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

    $Array1 = array("Dilshad", "Nosheen", "Tayyaba", "Kainat");
    // Error
    echo $Array1[10];
    echo "<br>";

    print_r($Array1);
    echo "<br>";

    echo $Array1[3];
    echo "<br>";

    // Associative Array To remember not a 0,1,2,3 key make your own remember key

    $Array2 = ["first_name" => 'Dilshad', "Class" => 12, "marks1" => 25, "marks2" => 25 ];

    echo $Array2['first_name'] . " ". $Array2['Class'] . "<br>". $Array2['marks1']+$Array2['marks2'];
    echo "<br>";
    echo implode(",", $Array2);

    ?>
</body>
</html>