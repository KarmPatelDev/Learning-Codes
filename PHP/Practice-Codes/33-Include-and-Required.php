<?php

// include 'dbconnection.php';   //if warning occur then no execute below codes

require 'dbconnection.php';     //if warning occur then below codes executes

echo "<br> Hello World <br>";

   $sql = "SELECT * FROM `trip`;";
    $result = mysqli_query($conn, $sql);
    
    //number of rows in table
    $num = mysqli_num_rows($result);
    echo $num . "<br>";


?>