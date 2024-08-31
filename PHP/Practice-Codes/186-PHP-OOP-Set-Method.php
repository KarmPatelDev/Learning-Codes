<?php

// When Fatal Error of private property access => we can use set method to set the private value propery
// it invoke when we use try to set the value of private or non existing property
// We have to pass two parameters(value and property)

class abc{
    private $name;

    public function __get($property){
       echo "This is Private or None Existing Propery<br>";
    }

    public function __set($property, $value){
        echo "This is Private or None Existing Propery<br>";

        if(property_exists($this, $property)){
            $this->$property = $value;  // write $ before property
            echo $this->$property . "<br>";
        }else{
            echo "This is None Existing Propery<br>";
        }
    }
}

$test = new abc();
$test->name; // it is show get method function
$test->name = "Karm Patel"; // it is not show get method function
$test->age = 23; // it is not show get method function
?>