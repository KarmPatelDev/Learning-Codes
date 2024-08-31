<?php

mysqli_report(MYSQLI_REPORT_OFF);

// mysqli_connect_error() => show the error
// mysqli_connect_errno() => return error number => we can use this for error handling like if-else

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed : " . mysqli_connect_error() . " " . mysqli_connect_errno());

// mysqli_error($conn) => it show proper message for sql query error
// mysqli_error_list() => it is return array where we have proper message, error no. It is only for sql query error
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
echo "<pre>";
print_r(mysqli_error_list($conn));
echo "</pre>";
// die("Query Failed" . " " . mysqli_error($conn));

$str="";
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name'] . " " . $row['last_name'] . "<br>";
    }
}

?>