<?php
$file = "Dilshad.txt";

if($handle = fopen($file, 'w')){

fclose($handle);
}else{
   echo "i am not able to create file";
}
?>