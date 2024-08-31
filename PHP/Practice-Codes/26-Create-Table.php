<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "karm";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "The DataBase was not connected" . mysqli_connect_error;
}
else{
    
    echo "The DataBase was connected successfully";

    $sql = "CREATE TABLE `trip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `dest` VARCHAR(15) NOT NULL , PRIMARY KEY (`sno`));";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Table was not created" . mysqli_error($conn);
    }
    else{
        echo "Table was created successfully";
    }
    
}

?>