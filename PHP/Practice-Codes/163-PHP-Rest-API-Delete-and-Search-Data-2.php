<?php

/* SEARCH RECORD */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Origin, Access-Control-Allow-Methods, Authorization, X-Requested-With');


/* FOR POST METHOD */
// $data = json_decode(file_get_contents("php://input"), true); // php://input => from which application, mac, mobile the request is post so it can read all type of data (xml, form, json) , true => for convert to array

// $search_val = $data['search']; // not use name like database name for security
  
/* FOR GET METHOD when we use url to pass data (search param ?=) */

$search_val = isset($_GET['search']) ? $_GET['search'] : die();

$conn = mysqli_connect("localhost", "root", "", "restapi") or die("Connection Failed");

$sql = "SELECT * FROM student WHERE name LIKE '%{$search_val}%'";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

if(mysqli_num_rows($result) > 0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output, JSON_PRETTY_PRINT);
}
else{
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}

?>