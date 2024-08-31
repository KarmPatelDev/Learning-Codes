<?php

/*
// AutoCommit on Then Changes in Database Permanent
// AutoCommit off Then Changes in Database Temporary{We can rollback the transaction}

try{
    $db_name = "mysql:host=localhost;dbname=restapi;";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);

    $conn->beginTransaction(); // it off the AutoCommit

    // INSERT COMMAND

    // UPDATE COMMAND

    $conn->commit(); // permanent store in database
}
catch(){
    $conn->rollback(); // rollback the last entry
}
*/

try{
    $db_name = "mysql:host=localhost;dbname=restapi;";
    $username = "root";
    $password = "";
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //setAttribute php inbuilt read documentation // if any error occur automatically error thrown to catch

    //same as upper [for multiple values]
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $conn = new PDO($db_name, $username, $password, $options); // $options pass here

    $conn->beginTransaction(); // it off the AutoCommit

    $sql1 = $conn->prepare("INSERT INTO student (name, age, city) VALUES (?, ?, ?)");
    $sql2 = $conn->prepare("UPDATE student SET age = 21 WHERE age = ?");

    $sql1->execute(['salim', 20, 'Gandhinagar']);
    $sql2->execute([20]);

    $conn->commit(); // permanent store in database
    echo "All Data Saved";
}
catch(Exception $e){

    $conn->rollback(); // rollback the last entry
    echo $e->getMessage();
}

?>