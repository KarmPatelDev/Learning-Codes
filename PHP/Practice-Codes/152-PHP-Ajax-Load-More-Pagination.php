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

<div id="table-data">

<table id='loadData' border='1' width='100%' cellspacing='0' cellpadding='10px'>
  <tr><th>Id</th><th>Name</th></tr> 
</table>

</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
  function loadTable(page){
    $.ajax({
      url: "152-Test.php",
      type: "POST",
      data: {page_no: page},
      //we can use beforsend: function(){}
      success: function(data){
        if(data){
          $("#pagination").remove();
          $("#loadData").append(data);
        }
        else{
            $("#ajaxbtn").html("No Record Found");
          $("#ajaxbtn").prop("disabled", true);
        }
       
      }
    });
  }
  loadTable();

    // Pagination Called
    $(document).on("click", "#ajaxbtn", function(){

        $("#ajaxbtn").html("Loading...");

        var page_id = $(this).data("id");
        
        loadTable(page_id);
    });
});
  </script>

</body>
</html>