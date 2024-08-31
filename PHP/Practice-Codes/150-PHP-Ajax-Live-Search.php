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
    .edit-btn{
        background: #1dbf73;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    .delete-btn{
        background: red;
        color: #fff;
        border: 0;
        padding: 4px 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    #modal{
        display: none;
        background: rgba(0, 0, 0, 0.7);
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 100;
    }
    #modal-form{
        background: #fff;
        width: 40%;
        position: relative;
        top: 20%;
        margin: 0 auto;
        padding: 15px;
        border-radius: 4px;
    }
    #modal h2{
        margin: 0 0 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #000;
    }
    #modal input{
        margin: 0;
    }
    #close-btn{
        background: red;
        color: #fff;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border-radius: 50%;
        position:absolute;
        top: -15px;
        right: -15px;
        cursor: pointer;
    }
  </style>
</head>
<body>

<div id="search-bar">
<label>Search : </label><input type="text" name="search" id="search" autocomplete="off"/>
</div>
  
<form id="addForm">
    First Name : <input type="text" name="fname" id="fname"><br><br>

    Last Name : <input type="text" name="lname" id="lname"><br><br>

    <input type="submit" name="save" id="save-button"/>
</form>

<div id="error-message"></div>
<div id="success-message"></div>

<div id="modal">
    <div id="modal-form">
        <h2>Edit Form</h2>
        <table id="" width="100%" cellpadding="10px">
        </table>
        <div id="close-btn">X</div>
    </div>
</div>


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
       
    //show modal box
    $(document).on("click", ".edit-btn", function(){
        $("#modal").show();

        var studentId = $(this).data("eid");
        
        $.ajax({
          url: "149-Test.php",
          type: "POST",
          data: {id: studentId},
          success: function(data){
            $("#modal-form table").html(data);
        }

        });
    });

    //hide modal box
    $(document).on("click", "#close-btn", function(){
        $("#modal").hide();
    });

    //submit edited data
    $(document).on("click", "#edit-submit", function(){

      var studId = $("#edit-id").val();
      var fname = $("#edit-fname").val();
      var lname = $("#edit-lname").val();
      
      if(fname == "" || lname == ""){
        $("#modal").hide();
        $("#error-message").html("All Fields are required.").slideDown();
        $("#success-message").slideUp();
      }
      else{
        $.ajax({
        url: "149-Test-2.php",
        type: "POST",
        data: {id: studId,first_name: fname,last_name: lname},
        success: function(data){
            if(data == 1){
                loadTable();
                // input data remove
                $("#modal").hide();
                $("#error-message").slideUp();
                $("#success-message").html("Record Successfully Updated.").slideDown();
                
            }
            else{
                $("#modal").hide();
                $("#error-message").html("Can't Updated Record.").slideDown();
                $("#success-message").slideUp();
            }      
          }
        });
      }

    });

    // Search Data
    $("#search").on("keyup", function(){
         var search_term = $(this).val();

         $.ajax({
            url: "150-Test.php",
            type: "POST",
            data: {search: search_term},
            success: function(data){
               $("#show-data").html(data);
            }
         });
         
    });

   });
  </script>

</body>
</html>