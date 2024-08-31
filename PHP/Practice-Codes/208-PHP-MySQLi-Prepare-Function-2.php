<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
  <style>
  </style>
</head>
<body>
<div id='content'>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "restapi";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_error){
        die("Connection Failed" . $conn->connect_error);
    }

    $sql = $conn->prepare("SELECT * FROM student");
    $sql->execute();

    // $result = $sql->get_result();  // get_result use fetch result and we can store to the variable // it not show actual record but show th information about record like how many rows selected, number of columns, length etc.
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    $sql->bind_result($id, $name, $age, $city); // it is easy and simploe code, colums result we directly store to the variable // it use for single record gathering
    while($sql->fetch()){
        echo $id . " " . $name . " " . $age . " " . $city . "<br>";
    }


    // while($row = $result->fetch_assoc()){ // show key
    //     echo "<pre>";
    //     print_r($row['id'] . " " . $row['name'] . " " . $row['age'] . " " . $row['city'] . "<br>");
    //     echo "</pre>";
    // }

    // while($row = $result->fetch_row()){ // show index
    //     echo "<pre>";
    //     print_r($row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . "<br>");
    //     echo "</pre>";
    // }

    // while($row = $result->fetch_object()){ // show as object
    //     $row = get_object_vars($row);  // convert to array
    //     echo "<pre>";
    //     print_r($row['id'] . " " . $row['name'] . " " . $row['age'] . " " . $row['city'] . "<br>");
    //     echo "</pre>";
    // }

    // $result = $sql->get_result()->fetch_all(); // multidimentional array with index
    // // $result = $sql->get_result()->fetch_all(MYSQLI_NUM); // same as upper
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC); // convert to key value
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
     
    ?>
</div>
</body>
</html>