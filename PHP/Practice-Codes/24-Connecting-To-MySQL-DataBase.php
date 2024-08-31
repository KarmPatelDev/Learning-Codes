<?php

/*
ways to connect mysql database
 1. MySQLi extension -> procedural and object oriented(it is work with mysql only)
 2. PDO -> php data object(it work with many database)
*/

// Connecting database we have to use three component
$servername = "localhost";
$username = "root";
$password = "";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful, in new database already not execute below statements
if(!$conn){
    die("Connection Was not Successful" . mysqli_connect_error());
}
else{
    echo "Connection Was Successful";
}


?>