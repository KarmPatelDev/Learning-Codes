<?php

session_start();

print_r($_SESSION);

if(isset($_SESSION["user"])){
    echo $_SESSION["user"];
}

$_SESSION["user"] = "karm2";

echo $_SESSION["user"];

session_unset();

session_destroy();

?>