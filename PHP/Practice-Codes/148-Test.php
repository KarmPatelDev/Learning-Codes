<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");

$sql = "DELETE FROM `students` WHERE id={$student_id};";

$result = mysqli_query($conn, $sql) or die("Query Failed");

if(mysqli_query($conn, $sql)){
    echo 1;
}
else{
    echo 0;
}


?>