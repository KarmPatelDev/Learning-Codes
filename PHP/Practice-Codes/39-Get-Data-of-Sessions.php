<?php

session_start();
if(isset($_SESSION['username'])){
echo "Welcome " . $_SESSION['username'];
echo "You favourite category is " . $_SESSION['favCat'];
}
else{
    echo "Please Login To Continue";
}

echo "<br>";

?>