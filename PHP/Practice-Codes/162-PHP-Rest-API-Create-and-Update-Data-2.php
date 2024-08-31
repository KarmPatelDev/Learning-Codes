<?php

/* UPDATE RECORD */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Origin, Access-Control-Allow-Methods, Authorization, X-Requested-With');
// Authorization => authorize person, mobile can access
// X-Requested-With => value are imported through ajax

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

$conn = mysqli_connect("localhost", "root", "", "restapi") or die("Connection Failed");

$sql = "UPDATE student SET name = '{$name}', age = '{$age}', city = '{$city}'WHERE id = {$id};";

if(mysqli_query($conn, $sql)){ 
    echo json_encode(array('message' => 'Record Successful Updated.', 'status' => true));
}
else{
    echo json_encode(array('message' => 'No Record Updated', 'status' => false));
}

?>