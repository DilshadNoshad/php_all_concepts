<?php

class Cars{
    var $wheels = 12;
    var $door = 4;
    
    function bmw(){
        echo "best car";
    }
    function mercedes(){
        $this->door = 6;
    }
}
// inheritance
class Plane extends Cars{
    // overide
    var $wheels = 4;

    function jet(){
       echo $this->wheels = 2 ."<br>";
    }
}

if(class_exists("Cars")){
    echo "class Cars present <br>";
}else{
    echo "not found";
}

$car = new Cars;
$car->mercedes();
echo $car -> door . "<br>";

if(class_exists("Plane")){
    echo "class plane present <br>";
}else{
    echo "not found";
}

$plane = new Plane;
$plane ->jet();
echo $plane -> wheels;
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