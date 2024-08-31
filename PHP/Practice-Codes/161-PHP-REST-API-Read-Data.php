<?php

/* Fetch ALL RECORDS */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$conn = mysqli_connect("localhost", "root", "", "restapi") or die("Connection Failed");

$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

if(mysqli_num_rows($result) > 0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output, JSON_PRETTY_PRINT);
}
else{
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}

?>