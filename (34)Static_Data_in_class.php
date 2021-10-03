<?php

class Dilshad{
    static $new = 12;
    var $name = "dilshad<br>";

    function other(){
        echo $this->name = "ashir<br>";
    }
    function function(){
        Dilshad::$new = 23;
    }
}

$boys = new dilshad;
echo $boys->name;
$boys->other();
echo $boys->name;

$boys->function();

echo Dilshad::$new;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>