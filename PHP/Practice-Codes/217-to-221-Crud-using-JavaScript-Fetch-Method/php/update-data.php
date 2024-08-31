<?php

include "config.php";

$input = file_get_contents('php://input');   // store json data to variable 

$jsonDecode = json_decode($input, true);

$id = $jsonDecode["id"];
$name = $jsonDecode["name"];
$age = $jsonDecode["age"];
$city = $jsonDecode["city"];

$sql = "UPDATE student SET name = '$name', age = '$age', city = '$city' WHERE id = '$id';";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('update' => 'success'));
}
else{
    echo json_encode(array('update' => 'error'));
}

?>