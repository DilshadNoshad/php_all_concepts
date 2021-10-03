<?php

class Exp{
    public $num1 = 12;
    protected $num2 = 34;
    private $num3 = 456;

    // var is by default public
    var $num4 = 56;

    function try_private(){
        echo $this->num3 . "<br>";
    }
}

class Exp_2 extends Exp{
    function try_protect(){
        echo $this->num2 . "<br>";
    }

}

$exp = new Exp;
$exp2 = new Exp_2;

echo $exp2->num1 . "<br>";
$exp2->try_protect();
$exp->try_private();
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