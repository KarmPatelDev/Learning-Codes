<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];

if(isset($_POST['save'])){
  echo "<br>" . $_POST['fname'] . "<br>";
  echo $_POST['age'] . "<br>";
}

?>

<!-- We Can Get Many Information using $_SERVER like HTTP, Server, Port, Host, Data info and also We submit form data using current file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
</head>
<body>

<!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET"> -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Name : <input type="text" name="fname"><br><br>

    Age : <input type="text" name="age"><br><br>

    <input type="submit" name="save">
</form>

</body>
</html>