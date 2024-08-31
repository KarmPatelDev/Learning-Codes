<?php

//PHP Array ===> JSON Object

// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4);
// echo json_encode($arr);
// it convert to ===> {"a":1,"b":2,"c":3,"d":4}

?>

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

<div id="load-data"></div>

<table id="table-data" border="1" cellpadding="10px" width="100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    <th>Country</th>
  </tr>
</table>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>
  /*
    $.ajax({
      url: "157-Test.php",
      type: "POST",
      dataType: "JSON",
      success: function(data){
        // console.log(data);
        $.each(data, function(key, value){
            $("#load-data").append(value.id + " " + value.name + " " + value.age + " " + value.gender + " " + value.country + "<br>");
        })
       }
      });
    */

    /*
    $.getJSON(
       "157-Test.php",
       function(data){
        // console.log(data);
        $.each(data, function(key, value){
            $("#load-data").append(value.id + " " + value.name + " " + value.age + " " + value.gender + " " + value.country + "<br>")
        });
       }
    );
    */


   $.ajax({
      url: "157-Test.php",
      type: "POST",
      data: {id : 2},
      dataType: "JSON",
      success: function(data){
        // console.log(data);
        $.each(data, function(key, value){
            $("#table-data").append("<tr><td>" + value.id + "</td><td>" + value.name + "</td><td>" + value.age + "</td><td>" + value.gender + "</td><td>" + value.country + "</td></tr>");
        })
       }
      });

  
</script>

</body>
</html>