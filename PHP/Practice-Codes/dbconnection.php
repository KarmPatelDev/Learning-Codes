<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "karm";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "The DataBase was not connected" . mysqli_connect_error;
}
else{
    
    echo "The DataBase was connected successfully";
}

?>