<?php

$db_name = "mysql:host=localhost;dbname=restapi;";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

// $sql = $conn->prepare("SELECT * FROM student");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_COLUMN); // PDO::FETCH_COLUMN => fetch first column only

// $result = $sql->fetchAll(PDO::FETCH_COLUMN, 0); // fetch first column only

// $result = $sql->fetchAll(PDO::FETCH_COLUMN, 1); // fetch second column only

// $result = $sql->fetchAll(PDO::FETCH_GROUP); // show multidimentional array by grouping

// $sql = $conn->prepare("SELECT age, name FROM student"); 
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_GROUP); // it make the group using first column(age) that we mention and make groups

// $result = $sql->fetchAll(PDO::FETCH_UNIQUE); // it show only one unique, it is elaborate using first column that we mention

// $sql = $conn->prepare("SELECT name, age FROM student"); 
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_KEY_PAIR); // for key pair we can use exactly two colums first it make key and other column make value

// $sql = $conn->prepare("SELECT * FROM student"); 
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_CLASS); // it same as FETCH_OBJ return standardclass object

// echo "<pre>";
// print_r($result);
// echo "</pre>";



$sql = $conn->prepare("SELECT * FROM student");
$sql->execute();

echo $sql->rowCount() . "<br>";  // rowCount() return number of row fetched and also return number of rows that are affected in update, insert

$sql = 'INSERT INTO student (`name`, `age`, `city`) VALUES ("Arav", "20", "Mahesana")';
$result = $conn->exec($sql); // it is execute the query and return how many rows are affected (update, delete, insert not select)
                             // NOTE : It is not work on select command
echo $result . "<br>";

$sq = 'INSERT INTO student (name, age, city) VALUES (?,?,?)';
$sql = $conn->prepare($sq); 
$sql->execute(["Karm", "20", "Mahesana"]);
echo $conn->lastInsertId() . "<br>"; // it return the last insert record id number 
                                    // NOTE : It is only work on Insert Command
?>