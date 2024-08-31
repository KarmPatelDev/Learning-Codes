<?php

/*
bindParam
bindValue
bindColumn => it is bind the output value
*/

$db_name = "mysql:host=localhost;dbname=restapi;";
$username = "root";
$password = "";

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$conn = new PDO($db_name, $username, $password, $options);

$sql = $conn->prepare("SELECT name, age FROM student");
$sql->execute();

// $result = $sql->fetchAll();
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $sql->bindColumn('name', $sname);
// $sql->bindColumn('age', $sage);

// we can also use like below (sequence number of column)
$sql->bindColumn(1, $sname);
$sql->bindColumn(2, $sage);

// => Now we have to use $sname and $sage to print name and age that we have fetch

while($row = $sql->fetch()){
    echo $sname . " => " . $sage . "<br>";
}

?>