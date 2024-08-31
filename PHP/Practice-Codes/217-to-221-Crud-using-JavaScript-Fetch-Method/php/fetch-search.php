<?php

include "config.php";

$search = $_GET['search'];

$sql = "SELECT * FROM student WHERE name LIKE '%{$search}%'";

$result = mysqli_query($conn, $sql);

$output = [];

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output[] = $row;
    }
}
else{
    $output['empty'] = ['empty'];
}

mysqli_close($conn);

echo json_encode($output);
?>