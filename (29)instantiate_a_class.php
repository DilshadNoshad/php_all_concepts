<?php
class Cars{

    function moving_Wheel(){
        echo "<br>who will win";
    }
}

if(method_exists('cars', 'moving_Wheel')){
    echo "yes,function present in class";
}else{
    "no it does not";
}
$bmw = new Cars();
$mercedes = new Cars();

$bmw->moving_Wheel();
$mercedes->moving_Wheel();

// if(class_exists("Cars")){
//     echo "yeah its nice";
// }else{
//     echo "no sad";
// }
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