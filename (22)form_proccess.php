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