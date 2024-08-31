<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "karm";

$conn = mysqli_connect($servername, $username, $password, $database);

echo var_dump($conn) . "<br>";

if(!$conn){
    echo "The DataBase was not connected" . mysqli_connect_error;
}
else{
    
    echo "The DataBase was connected successfully <br>";

    $sql = "DELETE FROM `trip` WHERE `sno` = 1;";
    $result = mysqli_query($conn, $sql);
    //it return bool
    echo var_dump($result) . "<br>";
    // to know effected rows
    $effect = mysqli_affected_rows($conn);
    echo "<br>Number of Effected Rows -:" . $effect . "<br>";

     if($result){
        echo "Table was selected successfully";
    }
    else{
        echo "Table was not selected" . mysqli_error($conn);
    }

}

?>