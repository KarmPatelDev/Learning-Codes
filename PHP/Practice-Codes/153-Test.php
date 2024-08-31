<?php

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");

$sql = "INSERT INTO student(name, age, gender, country) VALUES ('{$name}', '{$age}', '{$gender}', '{$country}');";

if(mysqli_query($conn, $sql)){
    echo "Data is Submitted";
}
else{
    echo "Data is not Submitted";
}

?>