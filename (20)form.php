<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $array = ["Dilshad", "Ashir", "Edwin", "Tokyo", "Proffessor"];
        $num1 = 3;
        $num2 = 10;

        if(strlen($username) > $num2){
            echo "Username is too big <br>";
        }
        if(strlen($username) <= $num1){
            echo "Username is too short <br>";
        }
        
        if(!in_array($username, $array )){
            echo "You Are Not Allowed";
        }
        else{
            echo "Hello " . $username . "<br>";
            echo "Your Password is: " . $password . "<br>";
        }
        
    }
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
   <form action="(20)form.php" method="post">
       <input type="text" name="username" placeholder="enter your name"><br><br>
       <input type="password" name="password" placeholder="enter your password"><br><br>
       <input type="submit" name="submit">
</body>
</html>