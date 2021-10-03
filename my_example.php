<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
  </head>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body{
      background: #F7F7F7;
    }
    .wrapper{
      display: flex;
    height: 100vh;
    width: 100%;
    justify-content: center;
    align-items: center;
    }
    .heading{
      font-size: 30px;
    }
    .button{
    background: #c02d28;
    border: none;
    padding: 10px 20px;
    color: white;
    border-radius: 25px;
    font-size: 24px;
}
.button:hover {
    background: #d43530;
}

form{
  max-width: 66.666667%;
}

.text-box {
    margin: 15px 0;
    padding: 10px 25px;
    outline: none;
    border: 1px solid #bbb;
    border-radius: 25px;
    -webkit-transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -ms-transition: 0.2s ease all;
    -o-transition: 0.2s ease all;
    transition: 0.2s ease all;
    width: 100%;
}
input[type=text]{
  font-size: 24px;
}
input[type=text]:focus {
	border-color: #d43530;
}
  </style>
  <body>
      <?php
      if(isset($_POST['submit'])){
        $grade = $_POST['marks'];
        if($grade >= 80 && $grade <=100) {
          echo "Grade  A";
          }
          elseif(is_numeric($grade) && $grade >100) {
            echo "Enter the correct marks. OR your MARKS is out of 100";
            }
          else if($grade >=60  && $grade <80) {
            echo "Grade B";
          }else if($grade >=50  && $grade <60) {
            echo "Grade C";
          }else if($grade >=45  && $grade <50) {
            echo "Grade D";
          
          }else if($grade >=25  && $grade <45) {
            echo "Grade E";
          }else if($grade >=0  && $grade <25) {
            echo "Grade F";
          }
          else {
           echo "Enter the correct marks";
          
          }
      }
      ?>
      <section class="wrapper">
    <form action="my_example.php" method="post">
      <label class="heading" for="result">ENTER YOUR MARKS</label><br />
      <input class="text-box"type="text" name="marks" />
      <input class="button" type="submit" name="submit">
    </form>
    </section>
  </body>
</html>
