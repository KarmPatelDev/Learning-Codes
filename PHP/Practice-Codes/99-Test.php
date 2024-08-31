<?php

// For GET Method
//it is use for search and display posts (parameters show in url)
// $_GET is make a array for print array use print_r

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// echo $_GET['fname'] . $_GET['age'] . $_GET['save'];


// For POST Method
//it is use for password and username (parameters not show in url)
// $_POST is make a array for print array use print_r

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo $_POST['fname'] . $_POST['age'] . $_POST['save'];

// it is work with POST and GET Both Methods
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST['fname'] . $_REQUEST['age'] . $_REQUEST['save'];

?>