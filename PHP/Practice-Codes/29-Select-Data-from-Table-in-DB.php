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

    // $sql = "CREATE TABLE `trip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `dest` VARCHAR(15) NOT NULL , PRIMARY KEY (`sno`));";

    // $result = mysqli_query($conn, $sql);

    // if(!$result){
    //     echo "Table was not created" . mysqli_error($conn);
    // }
    // else{
    //     echo "Table was created successfully";
    // }
    
    $sql = "SELECT * FROM `trip`;";
    $result = mysqli_query($conn, $sql);
    
    //number of rows in table
    $num = mysqli_num_rows($result);
    echo $num . "<br>";
    
    //Display the rows returned by the sql query
    if($num > 0){
        /*
        //it print the array of columns of one row (one by one if use multiple times) if there is no row after then print NULL
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row) . "<br>";

        $row = mysqli_fetch_assoc($result);
        echo var_dump($row) . "<br>";

        $row = mysqli_fetch_assoc($result);
        echo var_dump($row) . "<br>";

        $row = mysqli_fetch_assoc($result);
        echo var_dump($row) . "<br>";

        $row = mysqli_fetch_assoc($result);
        echo var_dump($row) . "<br>";
        */

        //we use the while loop
        while($row = mysqli_fetch_assoc($result)){
            echo $row['sno'] . " Hello " . $row['name'] . " WelCome To " . $row['dest'] . "<br>";
        }
    }

}

?>