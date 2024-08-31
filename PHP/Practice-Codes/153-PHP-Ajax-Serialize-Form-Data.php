
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
              $("#response").html($("#submit_form").serialize());

              $.ajax({
                url: "153-Test.php",
                type: "POST",
                data: $("#submit_form").serialize(),
                beforesend: function(){
                  $("#response").fadeIn();
                  $("#response").removeClass('success-msg error-msg').addClass('process-msg').html("Loading...");
                },
                success: function(data){
                  $("#submit_form").trigger("reset");
                  $("#response").removeClass('error-msg').addClass('success-msg').html(data);
                  setTimeout(function(){
                    $("#response").fadeOut("slow");
                  }, 5000);
                }
              })
            } 

         });
      });


    </script>
</body>
</html>