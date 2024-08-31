<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

// $sql = "SELECT * FROM student";
$sql = "SELECT * FROM student WHERE id={$_POST['id']}";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($output);
// echo "</pre>";

// Encode the array
echo json_encode($output);


?>