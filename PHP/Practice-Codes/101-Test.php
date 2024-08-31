<?php

$cookie_name = "user";

setcookie($cookie_name, '', time() - (3600), '/');

echo $_COOKIE[$cookie_name]; 

if(isset($_COOKIE[$cookie_name])){ // for check cookie set or not
    echo $_COOKIE[$cookie_name]; // not use single quotes
}

?>