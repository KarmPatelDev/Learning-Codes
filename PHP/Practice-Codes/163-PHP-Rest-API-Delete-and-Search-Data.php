<?php

// DELETE RECORD 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Origin, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true); // php://input => from which application, mac, mobile the request is post so it can read all type of data (xml, form, json) , true => for convert to array

$id = $data['sid']; // not use name like database name for security
  
$conn = mysqli_connect("localhost", "root", "", "restapi") or die("Connection Failed");

$sql = "DELETE FROM student WHERE id = {$id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record is Deleted', 'status' => true));
}
else{
    echo json_encode(array('message' => 'No Record Deleted', 'status' => false));
}

?>
