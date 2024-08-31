


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
</head>
<body>

<div id="load-data"></div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>
 
// For JSON Data Get  
/*
$.ajax({
    url: "JSON URL",
    type: "GET",
    successs: function(data){

    }
});
*/

$(document).ready(function(){
    
    /*
    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts/50",
        type: "GET",
        success: function(data){
            //console.log(data);
            $("#load-data").append(data.id + "<br>" + data.title + "<br>" + data.body + "<br>" );
        }
    });
    */

   /*
    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts",
        type: "GET",
        success: function(data){
            console.log(data);
             $.each(data, function(key, value){
                $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>" );
             })
        }
    });
    */

    // From Our File
    $.ajax({
        url: "156-Test.json",
        type: "GET",
        success: function(data){
            console.log(data);
             $.each(data, function(key, value){
                $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>" );
             });
        }
    });

    /*
    // ShortCut Function
    $.getJSON({
       "JSON URL",
       function(data){

       }
    });
    */
    $.getJSON(
        "156-Test.json",
       function(data){
        $.each(data, function(key, value){
                $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>" );
             });
       }
    );
});


</script>
</body>
</html>