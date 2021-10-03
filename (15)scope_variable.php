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
    $x = "outside" . "<br>"; 
    // -------- its a global variable

    function check(){
        global $x;
        // but i change into local to global with this
        $x = "inside" . "<br>";
          // -------- its a local variable
    }

    echo $x;

    check();

    echo $x;
    ?>
</body>
</html>