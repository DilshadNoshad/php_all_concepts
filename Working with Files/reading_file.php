<?php
$file = "Dilshad.txt";

if($handle = fopen($file, 'r')){
    echo $content = fread($handle, filesize($file));
    fclose($handle);
}else{
    echo "i am not able to read file";
}
?>