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

<div id="table-data"></div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
      function loadTable(page){
        $.ajax({
            url: "151-Test.php",
            type: "POST",
            //we can use beforsend: function(){}
            data: {page_no: page},
            success: function(data){
                $("#table-data").html(data);
            }
        });
      }
      loadTable();

      // Pagination Called
      $(document).on("click", "#pagination a", function(e){
         e.preventDefault();

         var page_id = $(this).attr("id");

         loadTable(page_id);
      });
});


  </script>

</body>
</html>