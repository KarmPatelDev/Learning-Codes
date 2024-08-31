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

    // $sql = "INSERT INTO `trip` (`sno`, `name`, `dest`) VALUES ('1', 'Karm', 'Gujarat');";
    $sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('Shubham', 'Delhi');";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Table data was not inserted" . mysqli_error($conn);
    }
    else{
        echo "Table data was inserted successfully";
    }

}


?>