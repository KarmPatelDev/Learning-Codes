<?php

// sessions used to manage information across different pages of that website without login all the pages one by one
// Sessions (it is sensitive so it is store in server and to access the parameters(values) store in server they give a session cookie to us.)

//verify the user info

session_start();  //NOTE: use the session_start(); top of the all content including html also

$_SESSION['username'] = "karm";
$_SESSION['favCat'] = "Books";

echo "We have saved your sesssions";


?>