<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");

$limit = 5;

if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}
else{
    $page= 0;
}

$sql = "SELECT * FROM students LIMIT {$page}, {$limit};";

$result = mysqli_query($conn, $sql) or die("Query Failed");

if(mysqli_num_rows($result) > 0){
    $output = "";
    while($row = mysqli_fetch_assoc($result)){
        $last_id = $row['id'];
        $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["first_name"]} {$row["last_name"]}</td></tr>";
    }  
    $output .= "
    <tr id='pagination'>
      <td colspan='2'>
        <button id='ajaxbtn' data-id='{$last_id}'>Load More</button>
      </td>
    </tr>
    ";

    mysqli_close($conn);

    echo $output;
}
else{
    echo "";
}

?>