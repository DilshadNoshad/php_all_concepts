<?php include "db_con.php";
?>
<?php

function Showalldatatoread(){
    global $connection;
$query ='SELECT * FROM users';

$result =  mysqli_query($connection, $query);

if(!$result){
    die('failed'. mysqli_error());
}
while($row = mysqli_fetch_assoc($result)){

        print_r($row);
    }
}

function readids(){
    global $connection;
$query ='SELECT * FROM users';

$result =  mysqli_query($connection, $query);

if(!$result){
    die('failed'. mysqli_error());
}

    while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
    }

}

function Update(){
    global $connection;
    
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];


    // encrypt password in blowfish
    $hash_format = "$2y$10$";
    $salt = "iusesomecrazystrings22";

    $hashf_and_salt = $hash_format . $salt;

    $password = crypt($password, $hashf_and_salt);
    
    // it is clarify your string before inserrrt your data base
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Update failed" . mysqli_error($connection));
    }else{
        echo "Update Succesfully";
        }
    }
}

function Delete(){
    global $connection;

if(isset($_POST['submit'])){
    $id = $_POST['id'];

    $query = "DELETE FROM users  ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Update failed" . mysqli_error($connection));
    }else
    {
        echo "Delete Succesfully";
        }
    }
}

function create(){
    global $connection;

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // encrypt password in blowfish
        $hash_format = "$2y$10$";
        $salt = "iusesomecrazystrings22";

        $hashf_and_salt = $hash_format . $salt;

        $password = crypt($password, $hashf_and_salt);
        
        // it is clarify your string before inserrrt your data base
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result){
            die("Operation Failed" . mysqli_error());
        }
        else{
            echo "Create Succesfully";
        }
    }
}
?>