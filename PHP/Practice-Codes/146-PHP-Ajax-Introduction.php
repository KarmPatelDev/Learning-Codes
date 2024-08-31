<?php

// AJAX => Asynchronous Javascript and XML
// It is technique for creating fast and dynamic web pages.
// we can load only one section in web page.
// form => ajax => php/mysql => server
// Require -: one backend, js/jQuery 

/*
For jQuery -: 

$.ajax({
    url: "file.php",   // where we have to send the for => read/insert/update/delete
    type: "POST",
    data: String/ Array/ Object,  // => data that we have to send
    beforesend: function(){} // => WE can use this for process time display message in ajax(when response is in waiting condition)
    success: function(data){
        // data that we get as a response from url
        // code in this where we have to show
    }

});



*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
  <style>
    table th{
      background: orange;
    }
    table tr td{
      text-align: center;
    }
    input{
      margin: 2rem 0;
    }

    </style>
</head>
<body>
  <input type="button" id="load-button" value="Load Data"/>
   
    <table id="show-data" border="1" width="100%" cellspacing="0" cellpadding="10px">
    </table>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
    $("#load-button").on("click", function(e){
       $.ajax({
        url: "146-Test.php",
        type: "POST",
        //we can use beforsend: function(){}
        success: function(data){
            $("#show-data").html(data);
        }

       })
    });
});


  </script>

</body>
</html>