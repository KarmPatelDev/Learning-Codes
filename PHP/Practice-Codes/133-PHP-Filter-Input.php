<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    Email : <input type="text" name="email"><br><br>

    <input type="submit" name="save">
</form>
<br>

<?php
// WE can validate form type, form field
// Syntax : filter_input(type, variable, filter, options)

  if(isset($_REQUEST['save'])){
    echo filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL); // we can also use INPUT_POST, INPUT_COOKIE, INPUT_SERVER, INPUT_SESSION, INPUT_ENV as a first parameter and we can use options as a fourth parameter
    if(filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
        echo "<br>Email is Valid";
    }
  }
?>

</body>
</html>