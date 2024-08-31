<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

include 'DbConnect.php';
$objDb = new DbConnect;
$conn = $objDb->connect();

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
if($stmt->execute()){
    $response = ['status' => '1', 'message' => 'Record Deleted Successfully'];
}
else{
    $response = ['status' => '0', 'message' => 'Something Went Wrong!'];
}
echo json_encode($response);
?>