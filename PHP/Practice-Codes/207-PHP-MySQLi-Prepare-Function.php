<?php

/*

// For Security 
SQL Injection one code =>  ' or ''='
$username = $conn->real_escape_string($_POST["username"]);
$password = $conn->real_escape_string($_POST["password"]);

// Connection 
$conn = new mysqli(Servername, Username, Password, Databasename)
// Run SQL Query
$sql = $conn->prepare("SELECT * FROM users WHERE user=? AND pass=?"); // ? means not value yet it is placeholder
$sql = $bind_params("ss", $username, $password); // now we bind the values with query ss means two string value first for user and other for pass
// we use i for integer, d for double, s for string, b for blob
$sql->execute(); // for execute the query
// Close
$conn->close();
// Last close $sql
$sql->close();


// Insert 
$sql = $conn->prepare("INSERT INTO users (user, password) VALUES (?, ?)");
$sql->bind_param("ss", $_POST['username'], $_POST['password']);
$sql->execute();
$sql->close();

// Update
$sql = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$sql->bind_param("si", $_POST['password'], $_POST['id']);
$sql->execute();
if($sql->affected_rows == 0){exit('No rows updated');}
$sql->close();

// Multiple Query Insert using Prepare statement
$sql = $conn->prepare("INSERT INTO myTable (firstname, lastname) VALUES (?, ?)");
$bind_param("ss", $firstname, $lastname);

$firstname = "karm";
$lastname = "patel";
$sql->execute();

$firstname = "patel";
$lastname = "karm";
$sql->execute();

$sql->close();
$conn->close();

*/

?>