<?php
$file = "Dilshad.txt";

if($handle = fopen($file, 'w')){
    fwrite($handle, 'i love php');
    fclose($handle);
}else{
    echo "i am not able to write in file";
}
?>