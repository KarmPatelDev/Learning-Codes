<?php

$fptr = fopen("myfile.txt", "r"); 

// echo fgets($fptr) . "<br>";
// echo fgets($fptr) . "<br>";

// while($a = fgets($fptr)){
//     echo $a . "<br>";
// }

// echo fgetc($fptr) . "<br>";
// echo fgetc($fptr) . "<br>";

// while($a = fgetc($fptr)){
//     echo $a . "<br>";
// }

fclose($fptr);

?>