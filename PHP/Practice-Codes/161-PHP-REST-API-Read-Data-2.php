<?php

/* FETCH SINGLE DATA */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true); // php://input => from which application, mac, mobile the request is post so it can read all type of data (xml, form, json) , true => for convert to array

$id = $data['sid']; // not use name like database name for security
  
$conn = mysqli_connect("localhost", "root", "", "restapi") or die("Connection Failed");

$sql = "SELECT * FROM student WHERE id = {$id}";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

if(mysqli_num_rows($result) > 0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output, JSON_PRETTY_PRINT);
}
else{
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}


?>