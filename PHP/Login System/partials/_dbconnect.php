<?php

// mysqli_report(MYSQLI_REPORT_OFF);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "users";

// //Create a custom error handler
// function customErrorHandler($errno, $errstr, $errfile, $errline){
//     //Log the error to a file or database
//     err_log("Error: [$errno] $errstr in $errfile on line $errline");

//     //Display a user-friendly error message
//     echo "Oops, something went wrong> Please try letter.";

//     //Prevent the default error handler from running
//     return true;
// }

// //Register the custom error handler
// set_error_handler("customErrorHandler");

// //Try to connect database using mysqli_connect
// $conn = mysqli_connect($servername, $username, $password, $database);

// //check if the connecion was successful or not 
// if(!$conn){
//     //Trigger a user error and let the custom error handle it
//     trigger_error("could not connect to database: " . mysqli_connect_error(), E_USER_ERROR);
// }
// else{echo 'The connection is success';}

// // $conn = new mysqli($servername, $username, $password, $database);
// // if($conn->connect_error){echo 'The connection is not success';}
// // else{echo 'The connection is success';}

// // $conn = mysqli_connect($servername, $username, $password, $database);
// // if(mysqli_connect_errno()){echo 'The connection is not success';}
// // else{echo 'The connection is success';}

/* activate reporting */
mysqli_report(MYSQLI_REPORT_OFF);

$servername = "localhost";
$username = "root";
$password = "t";
$database = "users";

//Create a custom error handler
function customErrorHandler($errno, $errstr, $errfile, $errline){
    //Log the error to a file or database
    // err_log("Error: [$errno] $errstr in $errfile on line $errline");

    //Display a user-friendly error message
    echo "Oops, something went wrong> $errno $errstr $errfile $errline Please try letter.<br>";

    //Prevent the default error handler from running
    return true;
}

//Register the custom error handler
set_error_handler("customErrorHandler");

// $mysqli = new mysqli($servername, $username, $password, $database);

// /* check connection */
// if (mysqli_connect_errno()) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    //Trigger a user error and let the custom error handle it
    echo("could not connect to database: ");
}
else{echo 'The connection is success';}

?> 
