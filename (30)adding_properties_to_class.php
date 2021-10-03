<?php
class house{
    var $door = 4;
    var $room = 12;
    var $kitchen = 4;

    function floor(){
        echo 45 . "<br>";    
    }
    function Ac(){
      $this->door = 67;
    }
}
$plot = new house();
$flat = new house();

echo $plot->room . "<br>";
$plot->floor();

echo $flat->Ac(); 
echo $flat->door . "<br>";
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