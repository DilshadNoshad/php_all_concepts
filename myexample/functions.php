<?php include "dbcon.php";
?>

<?php

function create(){
    global $connection;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
  
    $query = "INSERT INTO info_data (username, email, first_name, last_name, address, city, country)";
    $query .= "VALUES ('$username', '$email', '$first_name', '$last_name', '$address', '$city', '$country')";
  
    $result = mysqli_query($connection, $query);
  
    if(!$result){
      die("Insert failed" . mysqli_error($connection));
    }if($result){
      echo '<div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
      <p>Create Successfully.</p>
    </div>';
    }
}



function read(){
  global $connection;

  $query = "SELECT * FROM info_data";

  $result = mysqli_query($connection, $query);

  if(!$result){
    die("failed" . mysqli_error($connection));
  }


while($row = mysqli_fetch_assoc($result)){
  ?>

  <pre>
    <?php
    print_r($row);
    ?>
  </pre>
    <?php

}

}



function fetch_id(){
  global $connection;

  $query = "SELECT * FROM info_data";

  $result = mysqli_query($connection, $query);

  if(!$result){
    die("failed" . mysqli_error($connection));
  }


  while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value ='$id'>$id</option>";
}

}
function update(){
  global $connection;

  $username = $_POST['username'];
  $email = $_POST['email'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $id = $_POST['id'];

  $query = "UPDATE info_data SET ";
  $query .= "username = '$username', ";
  $query .= "email = '$email', ";
  $query .= "first_name = '$first_name', ";
  $query .= "last_name = '$last_name', ";
  $query .= "address = '$address', ";
  $query .= "city = '$city', ";
  $query .= "country = '$country' ";
  $query .= "WHERE id = $id";

  $result = mysqli_query($connection, $query);

  if(!$result){
      die("update failed" . mysqli_error($connection));
  }if($result){
      echo '<div class="flex items-center bg-yellow-500 text-white text-sm font-bold px-4 py-3" role="alert">
      <p>Update Successfully.</p>
    </div>';
  }
}



  function delete(){
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE FROM info_data ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("delete Failed" . mysqli_error($connection));
    }if($result){
      echo '<div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert">
      <p>Delete Successfully.</p>
    </div>';
    }
  }


?>