<?php

include "database.php";

$obj = new Database();

// $obj->insert('student', ['name' => 'Ram Kumar', 'age' => '20', 'city' => 'Goa']);
// echo "Insert Result is : ";
// print_r($obj->getResult());

// $obj->update('student', ['name' => 'Krishna Kumar', 'age' => '20', 'city' => 'Delhi'], 'id="23"');
// echo "Update Result is : ";
// print_r($obj->getResult());

// $obj->update('student', ['city' => 'Delhi'], 'age="20"');
// echo "Update Result is : ";
// print_r($obj->getResult());

// $obj->delete('student', 'id="23"');
// echo "Delete Result is : ";
// print_r($obj->getResult());

// $obj->sql('SELECT * FROM student');
// echo "Search Result is : <pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj->select('student', 'id, name', null, 'age="20"', 'name', 4);
// echo "Select Result is : <pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $colname = "student.id, student.name, student.age, citytb.name";
// $join = "citytb ON student.city = citytb.cid";
$limit = 2;

$obj->select('student', '*', null, null, null, $limit);
// echo "Select Result is : <pre>";
// print_r($obj->getResult());
// echo "</pre>";

$result = $obj->getResult();

echo "<table border='1' width='500px'><tr><th>Id</th><th>Name</th><th>Age</th><th>City</th></tr>";
foreach($result as list("id" => $id, "name" => $name, "age" => $age, "city" => $city)){ // we don't use nested loop
  echo "<tr><td>$id</td><td>$name</td><td>$age</td><td>$city</td></tr>";
}
echo "</table>";

$obj->pagination('student', null, null, $limit);

?>