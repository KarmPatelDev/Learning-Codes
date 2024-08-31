<?php

// we can use two class with same name using namespace

require "180-Test.php";
require "180-Test-2.php";

class test{
    public function __construct(){
        echo "This is Main Page Class<br>";

    }
}

function wow(){
    echo "Wow from Main File.<br>";
}

use first as cmd; // we cam rename first to cmd using this method

$test1 = new cmd\test();  // for first namespace class test
$test2 = new second\test();  // for first namespace class test
$test3 = new test();  // for first namespace class test

wow();
first\wow();
second\wow();



?>