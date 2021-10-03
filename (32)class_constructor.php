<?php

class School{
    var $bags = 400;
    var $room = 30;

    function __construct(){
        echo $this->room = 45 . "<br>";
    }
}

class W3_exp{

    var $student_name;
    var $class;

    function __construct($student_name, $class){
        $this->student_name = $student_name;
        $this->class = $class;
    }

    function get_student(){
        return $this->student_name;
    }
    function get_class(){
        return $this->class;
    }
}


$w3_exp = new W3_exp("Dilshad", 12);
echo $w3_exp -> get_student() . "<br>";
echo $w3_exp -> get_class() . "<br>";

$w3_exp2 = new W3_exp("Ashir", 12);
echo $w3_exp2 -> get_student() . "<br>";
echo $w3_exp2 -> get_class() . "<br>";

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