<?php

include "config.php";

$input = file_get_contents('php://input');   // store json data to variable 

$jsonDecode = json_decode($input, true);

$name = $jsonDecode["name"];
$age = $jsonDecode["age"];
$city = $jsonDecode["city"];

$sql = "INSERT INTO student (name, age, city) VALUES ('$name', '$age', '$city');";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('insert' => 'success'));
}
else{
    echo json_encode(array('insert' => 'error'));
}

?>