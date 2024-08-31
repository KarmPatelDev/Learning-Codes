<?php
/*
// PDO => PHP Data Objects
// Procedure and OOP only support MySQL but PDO support MySQL, Postgres, SQLite, Oracle, MS SQL Server
// PDO is secure and fast

// Connection
$databasename = "mysql:host=localhost;dbname=Database_name;";
$conn = new PDO($databasename, Username, Password);

// Run  SQL Query
$conn->query(SQL Query)
or
$conn->prepare(SQL Query)

// Close Connection
$conn = null;

//Fetch Style Function
PDO::FETCH_ASSOC
PDO::FETCH_NUM
PDO::FETCH_BOTH
PDO::FETCH_OBJ

*/

$db_name = "mysql:host=localhost;dbname=restapi;";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sql = $conn->query("SELECT * FROM student");

// while($row = $sql->fetch(PDO::FETCH_ASSOC)){
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
//     echo $row['id'] . " " .  $row['name'] . " " .  $row['age'] . " "  . $row['city'] . "<br>";
// }

// while($row = $sql->fetch(PDO::FETCH_OBJ)){
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
//     echo $row->id . " " .  $row->name . " " .  $row->age . " "  . $row->city . "<br>";
// }

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
if(count($result) > 0){
    foreach($result as $row){
        echo $row['id'] . " " .  $row['name'] . " " .  $row['age'] . " "  . $row['city'] . "<br>";
    }
}
else{
    echo "No Record Available";
}

// while($row = $sql->fetch(PDO::FETCH_ALL)){
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
//     echo $row->id . " " .  $row->name . " " .  $row->age . " "  . $row->city . "<br>";
// }

?>