<?php
/*
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

// Reduce the structure and don't we have to mugup(we don't have to remind the name of attributes like url, type, success)
Note :- It is not support array and also beforesend attribute

$.post(
    "file.php",
    String / Object,
    function(result){

    }
);

$.get(
    "file.php",
    String / Object,
    function(result){

    }   
);

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

    #response{
      width: 70%;
      margin: 15px auto;
      padding: 15px;
      border-radius: 5px;
    }
    .error-msg{
      background: #f2dedf;
      color: #9c4150;
      border: px solid #e7ced1;
    }
    .success-msg{
      background: #e0efda;
      color: #407a4a;
      border: 1px solid #c6dfb2;
    }
    .process-msg{
      background: #d9edf6;
      color: #377084;
      border: 1px solid #c8dce5;
    }
    </style>
</head>
<body>
  <!-- serialize => It is convert all the form data to the string -->
    <div id="table-data">
      <form id="submit_form">
        <label>Name: </lable><input type="text" name="name" id="name"/><br>
        <label>Age: </lable><input type="number" name="age" id="age"/><br>
        <label>Gender: </lable><input type="radio" name="gender" value="male"/> Male <input type="radio" name="gender" value="female"/> Female<br>
        <label>Gender: </lable>
        <select name="country">
            <option value="ind">India</option>
            <option value="pk">Pakistan</option>
            <option value="ban">Bangladesh</option>
            <option value="ne">Nepal</option>
            <option value="sl">Srilanka</option>
        </select><br>
        <input type="button" name="submit" id="submit" class="btn btn-info" value="Send"/><br>
      </form>
      <div id="response"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
         $("#submit").click(function(){
            var name = $("#name").val();
            var age = $("#age").val();
            
            if(name == "" || age == "" || !$('input:radio[name=gender]').is(':checked')){
              $("#response").fadeIn();
              $("#response").removeClass('success-msg').addClass('error-msg').html("All fields are required.");
            }
            else{
              $.post(
                "153-Test.php",
                $("#submit_form").serialize(),
                function(data){
                  $("#submit_form").trigger("reset");
                  $("#response").removeClass('error-msg').addClass('success-msg').html(data);
                  setTimeout(function(){
                    $("#response").fadeOut("slow");
                  }, 5000);
                }
              );
            } 

         });
      });


    </script>
</body>
</html>