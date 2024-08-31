<?php

// we can't store object in file, session or database we have to convert in array

class abc{
    public $name = "Karm Patel";
    public $course = "PHP";
    public $fees = 32000;
    
    public function __sleep(){
        return array("name", "fees"); // array has only two key name not use $
    }

}


$test = new abc();
// sleep magic function invoke when we serialize the object [clean the array]
$test_array = serialize($test); // we can use magic function sleep when we have to store particular properties and objects from array

echo $test_array;


?>