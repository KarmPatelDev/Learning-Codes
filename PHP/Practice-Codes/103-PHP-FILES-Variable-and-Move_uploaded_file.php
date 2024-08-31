<?php

    if(isset($_POST['save'])){
    echo $_POST['fname'] . $_POST['age'] . $_POST['save'];
    }
    
    if(isset($_FILES['image'])){
    echo "<pre>";
       print_r($_FILES['image']);
    echo "</pre>";
    
    // we can add condition using below this -:
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if(move_uploaded_file($file_tmp_name, "uploaded_images/".$file_name)){
       echo "Uploaded Successfully";
    }else{
       echo "Something Went Wrong";
    }
       
    }

?>

<!-- 
    
Client Side To Server Side File Moving 
$_FILES['image'] => return array => name, full_path, size, tmp_name, error, type
move_uploaded_file(file, dest) => it is upload the file to client to server => dest => where to upload
Write => enctype="multipart/form-data" => to form attribute it is use when we have use the inpute type file
we can't upload file with post therefore we use seperate $_FILES['name'] to handle that's why it is multipart/form-data

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

    Name : <input type="text" name="fname"><br><br>

    Age : <input type="text" name="age"><br><br>

    Upload File : <input type="file" name="image"/><br><br>

    <input type="submit" name="save">
</form>

</body>
</html>