<?php 

$showError = false;
$showAlert = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $existsql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $existres = mysqli_query($conn, $existsql);

    $num = mysqli_num_rows($existres);

    if($num > 0){
        $showError = 'Username already exists.';
    }
    else{
        if($password == $confirmpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp());";
    
            $result = mysqli_query($conn, $sql);
    
            if($result){
                $showAlert = true;
            }
            else{
                echo "Error: "  . mysqli_error($conn);
            }
        }
        else{
            $showError = 'Password not matched.';
        }
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

   <!-- navbar -->
   <?php require 'partials/_nav.php'; ?>

   <!-- alert -->
   <?php 
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You account is created.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Success!</strong> ' . $showError . 
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>

   <div class="container mt-3">

    <h1 class="text-center">Signup</h1>

    <form action="/Login%20System/signup.php" method="POST">
    <div class="form-group mt-3">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" maxlength="16" aria-describedby="emailHelp" placeholder="Enter Username" name="username" required/>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group mt-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" maxlength="32" placeholder="Enter Password" name="password" required/>
    </div>
    <div class="form-group mt-3">
        <label for="confirmpassword">Confirm Password</label>
        <input type="password" class="form-control" id="confirmpassword" maxlength="32" placeholder="Enter Confirm Password" name="confirmpassword" required/>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Signup</button>
    </form>
     
   </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  </body>
</html>