<?php

/*
JSON Object ====> PHP Array / Object
json_decode(json object, assoc);
assoc => (true or false) => if true then return associative array otherwise return php object
*/

/*
$json_obj = '{"a":1, "b":2, "c":3, "d":4, "e":5}';
$arr = json_decode($json_obj, true);
echo "<pre>";
print_r($arr);
echo "</pre>";
*/

$json_string = "156-Test.json";
$jsondata = file_get_contents($json_string);
$arr = json_decode($jsondata, true);

echo '<table border="1" cellpadding="10px" width="100%">';
foreach($arr as list("id" => $id, "title" => $title, "body" => $body)){
    echo "<tr><td>{$id}</td><td>{$title}</td><td>{$body}</td></tr>";
}
echo '</table>';

echo "<pre>";
print_r($arr);
echo "</pre>";

?>