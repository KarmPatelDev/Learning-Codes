<?php

echo "Welcome to write files in php";

// $fptr = fopen("myfile2.txt", "w"); 

// fwrite($fptr, "This is the best file from all files
// and it is very good.");

//  \n for new line otherwise press enter  <br> not work
$fptr = fopen("myfile2.txt", "a"); 

fwrite($fptr, "This is the best file from all files<br>
and it is very good.\n");

fclose($fptr);

?>