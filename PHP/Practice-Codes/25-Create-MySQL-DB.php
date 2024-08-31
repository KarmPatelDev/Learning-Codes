<?php

// Connecting database we have to use three component
$servername = "localhost";
$username = "root";
$password = "";

// Create a Connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful, in new database already not execute below statements
if(!$conn){
    die("Database not connected" . mysqli_connect_error());
}
else{
    echo "DataBase is connected";
}

//create db
$sql = "CREATE DATABASE karm";
$result = mysqli_query($conn, $sql);

//if query success then true otherwise false
echo "The Result is ";
echo var_dump($result);

//check database created successful
if($result){
    echo "The DB was created successfully";
}
else{
    echo "The DB was not created successfully" . mysqli_error($conn);
}

?>