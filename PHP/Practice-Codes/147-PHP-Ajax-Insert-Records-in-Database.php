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
    #success-message{
      background: #1dbf73;
      border-radius: 10px;
      color: #fff;
      padding: 10px;
      margin: 0 auto;
      display: none;
      position: absolute;
      top: 15px;
      right: 15px;
    }
    #error-message{
      background: #f76f65;
      border-radius: 10px;
      color: #fff;
      padding: 10px;
      margin: 0 auto;
      display: none;
      position: absolute;
      top: 15px;
      right: 15px;
    }

  </style>
</head>
<body>
  
<form id="addForm">
    First Name : <input type="text" name="fname" id="fname"><br><br>

    Last Name : <input type="text" name="lname" id="lname"><br><br>

    <input type="submit" name="save" id="save-button"/>
</form>

<div id="error-message"></div>
<div id="success-message"></div>


<table id="show-data" border="1" width="100%" cellspacing="0" cellpadding="10px">
</table>


<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
   function loadTable(){
        $.ajax({
        url: "146-Test.php",
        type: "POST",
        //we can use beforsend: function(){}
        success: function(data){
            $("#show-data").html(data);
        }
    });
   }

   $("#save-button").on("click", function(e){
      e.preventDefault();
      
      var fname = $("#fname").val();
      var lname = $("#lname").val();

      if(fname == "" || lname == ""){
        $("#error-message").html("All Fields are required.").slideDown();
        $("#success-message").slideUp();
      }
      else{
        $.ajax({
        url: "147-Test.php",
        type: "POST",
        data: {first_name: fname,last_name: lname},
        success: function(data){
            if(data == 1){
                loadTable();

                // input data remove
                $("#addForm").trigger("reset");
                $("#error-message").slideUp();
                $("#success-message").html("Record Successfully Inserted.").slideDown();
                
            }
            else{
              $("#error-message").html("Can't Saved Record.").slideDown();
               $("#success-message").slideUp();
            }      
          }
        });
      }
   });
   
   loadTable();

   
});


  </script>

</body>
</html>