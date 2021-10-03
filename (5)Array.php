<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Same array function -->
    <!-- array();
    []; -->

    <?php
    $number_list = array(12, 34, 55, "123", "Dilshad", "<h1>HELLO</h1>");
    // $number_list = [12, 34, 55, "123", "Dilshad", "<h1>HELLO</h1>"];

    // this print array all value without foreach loop
    echo implode("<br>", $number_list);

    // this print array in as it value
    print_r ($number_list);

    echo "<br>";
    echo $number_list[4];
    echo "<br>";
    echo $number_list[3];
    echo "<br>";

    ?>
</body>
</html>