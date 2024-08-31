<?php

// require "184-Classes/184-Test.php";
// require "184-Classes/184-Test-2.php";
// require "184-Classes/184-Test-3.php";
// require "184-Classes/184-Test-4.php";

//shortcut we don't have to use require individually

// function __autoload($class){
//     require "184-Classes/" . $class . ".php";
// }


// Upper Function is Depricated but we can use below [we can use for other work check documentation]
spl_autoload_register(function ($class) {
    include '184-Classes/' . $class . '.php';
});

$test = new first(); // when we make object it pass the class to autoload function
$test = new second();
$test = new third();
$test = new fourth();

?>