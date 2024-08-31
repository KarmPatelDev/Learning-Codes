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
    .delete-btn{
        background: red;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
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
    //Get Data
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
   loadTable();

   //Insert Data
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
   
   // Delete Data => we can't use upper method for click because it is dynamically loaded
   $(document).on("click", ".delete-btn", function(){

    let deleteConfirm = prompt('Please Write "DELETE" for Delete The Record');
        if (deleteConfirm == "DELETE" || deleteConfirm == "delete" || deleteConfirm == "Delete" || deleteConfirm == '"DELETE"') {
            var studentId = $(this).data("id");
            var element = this;
            $.ajax({
                url: "148-Test.php",
                type: "POST",
                data: {id: studentId},
                success: function(data){
                    if(data == 1){
                        $(element).closest("tr").fadeOut();
                        loadTable();
                        $("#error-message").slideUp();
                        $("#success-message").html("Record Successfully Deleted.").slideDown();
                        
                    }
                    else{
                    $("#error-message").html("Can't Delete Record.").slideDown();
                    $("#success-message").slideUp();
                    }      
                }
            });
        }
        else{
            $("#error-message").html("Something Went Wrong! Please Try Again").slideDown();
            $("#success-message").slideUp();
        }
       
   });


   
});


  </script>

</body>
</html>
