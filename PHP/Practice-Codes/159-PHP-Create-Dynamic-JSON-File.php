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
    <form id="submit_form" method="POST" action="159-Test-2.php">
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
        <input type="submit" name="submit" id="submit"/><br>
    </form>
</div>
</body>
</html>