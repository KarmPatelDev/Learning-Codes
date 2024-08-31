<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

/* DATABASE MYSQL Data To json File Create */

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

// $json_data = json_encode($output);
$json_data = json_encode($output, JSON_PRETTY_PRINT); // For readable formate make (not all in single line)

$file_name = "my-" . date("d-m-Y") . ".json"; // define file name that we have to create

if(file_put_contents("json/{$file_name}", $json_data)){
    echo $file_name . " File Created.";
}
else{
    echo "Can't Insert Data in JSON file";
}



?>