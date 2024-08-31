<?php

/*
PHP & MySQL Programming Methods:
=> MySQLi Procedure
=> MySQLi Object Oriented
=> PDO

=>connection
$conn = mysqli_connect(Servername, Username, Password, Databasename);
$conn = new mysqli(Servername, Username, Password, Databasename);

=>Run SQL Query
mysqli_query(Connection Name, SQL Query);
$conn->query(SQL Query);

=>Close Connection
mysqli_close(Connection name);
$conn->close();

=>Fetch Functions
mysqli_fetch_assoc() => $result->fetch_assoc()
mysqli_fetch_array() => $result->fetch_array()
mysqli_fetch_row() => $result->fetch_row()
mysqli_fetch_all() => $result->fetch_all()
mysqli_fetch_field() => $result->fetch_field()

mysqli_affected_rows($conn) => $conn->affected_rows()

=>Error Functions
mysqli_connect_error() => $conn->connect_error()
mysqli_connect_errno() => $conn->connect_errno()
mysqli_error() => $conn->error()
mysqli_error_list() => $conn->error_list()

*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restapi";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Sorry Connection Problem" . $conn->connect_error);
}

$sql = "SELECT * FROM student";

$result = $conn->query($sql);

if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
    echo "Id: {$row["id"]} - Name: {$row["name"]} - Age: {$row["age"]} - City: {$row["city"]} <br>";
   }
}
else{
    echo "No Result Found";
}

$conn->close();

?>