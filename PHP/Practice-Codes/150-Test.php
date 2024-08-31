<?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");

$sql = "SELECT * FROM students WHERE first_name LIKE '%{$search_value}%' OR last_name LIKE '%{$search_value}%';";

$result = mysqli_query($conn, $sql) or die("Query Failed");

if(mysqli_num_rows($result) > 0){
   
    $output = "<tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Edit</th>
    <th>Delete</th>
  <tr>";

    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr><td>{$row['id']}</td><td>{$row['first_name']}</td><td>{$row['last_name']}</td>
        <td><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td>
        <td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
    };

    mysqli_close($conn);

    echo $output;

}else{

    echo "<h2>No record found</h2>";

}

?>