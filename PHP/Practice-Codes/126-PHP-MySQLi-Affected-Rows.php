<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

// $sql = "INSERT INTO `students` (first_name, last_name) VALUES ('Akshay', 'Nena');";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total Rows : " . mysqli_affected_rows($conn);

?>