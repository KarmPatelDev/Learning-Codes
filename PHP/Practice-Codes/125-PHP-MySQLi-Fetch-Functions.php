<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Failed");

/*
$row = mysqli_fetch_assoc($result); // it is fetch one record return associative array
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row['first_name'] . " " . $row['last_name'] . "<br>";

while($row = mysqli_fetch_assoc($result)){
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
*/

/*
$row = mysqli_fetch_row($result);  // it is fetch one record but it return the index array
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row[1] . " " . $row[2] . "<br>";

while($row = mysqli_fetch_row($result)){
    echo $row[1] . " " . $row[2] . "<br>";
}
*/

/*
$row = mysqli_fetch_array($result);  // it is fetch one record but it return the index and associative both array
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // it return only associative
// $row = mysqli_fetch_array($result, MYSQLI_NUM); // it return only index
// $row = mysqli_fetch_array($result, MYSQLI_BOTH); // default value(associative + index)
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row[1] . " " . $row[2] . "<br>";
echo $row['first_name'] . " " . $row['last_name'] . "<br>";

while($row = mysqli_fetch_array($result)){
    echo $row[1] . " " . $row[2] . "<br>";
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
*/

/*
// $row = mysqli_fetch_all($result); // it is fetch all the record once and return multi-dimentional array index inner array
$row = mysqli_fetch_all($result, MYSQLI_ASSOC); // it return only multi-dimentional array associative inner array
// $row = mysqli_fetch_all($result, MYSQLI_NUM); // it return only multi-dimentional array index inner array
// $row = mysqli_fetch_all($result, MYSQLI_BOTH); // default value multi-dimentional array (associative + index) inner array
echo "<pre>";
print_r($row);
echo "</pre>";

foreach($row as $data){
    echo $data['id'] . " " . $data['first_name'] . " " . $data['last_name'] . "<br>";
}
*/

$row = mysqli_fetch_field($result); // it is not fetch data but fetch the information of columns in database table => it is fetch columns => it define information using first row of record in column(like max_length property)
echo "<pre>";
print_r($row); // it return object
echo "</pre>";

while($row = mysqli_fetch_field($result)){
    echo $row->name . " " . $row->table . "<br>";
}

?>