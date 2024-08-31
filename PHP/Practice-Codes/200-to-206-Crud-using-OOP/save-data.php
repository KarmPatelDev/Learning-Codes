<?php

include "database.php";
$obj = new Database();

$sname = $_POST['sname'];
$sage = $_POST['sage'];
$scity = $_POST['scity'];

$value = ["name" => $sname, "age" => $sage, "city" => $scity];

if($obj->insert("student", $value)){
    echo "<h2>Data Inserted Succesfully";
}
else{
    echo "<h2>Data Not Inserted Successfully";
}
?>