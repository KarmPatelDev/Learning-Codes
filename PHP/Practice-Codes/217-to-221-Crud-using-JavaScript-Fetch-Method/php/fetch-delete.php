<?php

include "config.php";

$id = $_GET["delete"];

$sql = "DELETE FROM student WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if(mysqli_query($conn, $sql)){
    echo json_encode(array('delete' => 'success'));
}
else{
    echo json_encode(array('delete' => 'error'));
}

?>