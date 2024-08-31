<?php

session_start();

$_SESSION["user"] = "karm"; // Set Session Name & Value

echo $_SESSION["user"]; // Get Session Value

// session_unset(); // Remove all session variables
 
// session_destroy(); // destroy session

?>