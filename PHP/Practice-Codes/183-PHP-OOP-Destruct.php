<?php

// Construct and Destruct work for mysqli_connect and mysqli_close
class abc{
    public function __construct(){
        echo "The objects is construct.<br>";
    }

    public function hello(){
        echo "Hello Guys<br>";
    }

    public function __destruct(){
        echo "The objects is distruct.<br>";
    }
}

$test = new abc();
$test->hello();


?>