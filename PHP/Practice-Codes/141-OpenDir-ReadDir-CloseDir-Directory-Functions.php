<?php
// Directory open, read, close

$dir = "./uploaded_images";

if(is_dir($dir)){
    if($d = opendir($dir)){
        while($file = readdir($d)){
            echo "File Name : " . $file . "<br>";
        }
        closedir($d);
    }
}

?>