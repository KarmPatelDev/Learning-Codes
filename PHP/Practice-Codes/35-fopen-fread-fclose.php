<?php

$fptr = fopen("myfile.txt", "r"); //we make the pointer

echo var_dump($fptr);

if(!$fptr){
    die("unable to open file.please enter a valid filename");
}

$content = fread($fptr, filesize("myfile.txt"));

echo $content;

fclose($fptr);

?>