<?php
/*
$db_name = "mysql:host=localhost;dbname=Database;";
$conn = new PDO($db_name, User name, Password);

$conn->prepare("SELECT * FROM users WHERE user = ? AND pass = ?");
$sql->bindParam(1, $username);  // we can also use bind value.
$sql->bindParam(2, $password);
$sql->execute();
$conn = null;
*/

$db_name = "mysql:host=localhost;dbname=restapi;";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$age = 20;

/*
We have other PARAM Values
PDO::PARAM_INT //only integer allow
PDO::PARAM_STR //only string allow
PDO::PARAM_LOB //only blob allow {more content}
PDO::PARAM_BOOL //only boolean allow
PDO::PARAM_NULL //only null allow
*/

/*
$sql = $conn->prepare("SELECT * FROM student WHERE age = ?");
$sql->bindParam(1, $age, PDO::PARAM_INT); // PDO::PARAM_INT only integer it works
$sql->execute();

$sql = $conn->prepare("SELECT * FROM student WHERE age = ?");
$sql->bindValue(1, $age, PDO::PARAM_INT); // it is same as bindParam
$sql->execute();

$sql = $conn->prepare("SELECT * FROM student WHERE age = ?");
$sql->execute(array($age)); // we can use this instead of bindValue or bindParam with $sql->execute(); separately

$sql = $conn->prepare("SELECT * FROM student WHERE age = :age"); //to give name for placeholder use :name
$sql->bindParam(':age', $age, PDO::PARAM_INT); // name in the quote
$sql->execute();
*/

$sql = $conn->prepare("SELECT * FROM student WHERE age = :age"); 
$sql->execute(array(':age' => $age)); // not use bindParam or bindValue // add associative array to execute for binding

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    echo $row['id'] . " " .  $row['name'] . " " .  $row['age'] . " "  . $row['city'] . "<br>";
}

?>