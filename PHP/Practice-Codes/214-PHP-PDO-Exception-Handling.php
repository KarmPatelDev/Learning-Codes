<?php

try{
    $db_name = "mysql:host=localhost;dbname=restapi;";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);

    $sql = $conn->prepare("SELECT * FROM student1");
    $sql->execute();

    $error = $sql->errorInfo(); // it show error related to database and query

    if($error[1]){
        echo $sql->errorCode() . " : " . $error[2];
    }
    else{
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        echo "<pre>";
        print_r($result);
        echo "<pre>";
    }
    
}
catch(PDOException $e){
    echo $e->getMessage();
}



?>