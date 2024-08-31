<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

include 'DbConnect.php';
$objDb = new DbConnect;
$conn = $objDb->connect();

$user = json_decode(file_get_contents('php://input'));
$sql = "INSERT INTO students (name, email, mobileno, age, city) VALUES (:name, :email, :mobileno, :age, :city);";
$stmt = $conn->prepare($sql); // it return statement object
$stmt->bindParam(':name', $user->name);
$stmt->bindParam(':email', $user->email);
$stmt->bindParam(':mobileno', $user->mobileno);
$stmt->bindParam(':age', $user->age);
$stmt->bindParam(':city', $user->city);

if($stmt->execute()){
    $response = ['status' => '1', 'message' => 'Record Inserted Successfully'];
}
else{
    $response = ['status' => '0', 'message' => 'Something Went Wrong!'];
}

echo json_encode($response);

?>