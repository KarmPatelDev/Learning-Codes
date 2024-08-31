<?php

// Abstract class we cant make object of this but we can inherit this and use the properties anf function
// To Conditions For Abstract Class
// 1 => Atleast we have to make one abstract method(declare not implement)
// 2 =>  We implement abstract class abstract method in inherited class

abstract class parentClass{
    public $name;

    abstract protected function calc($a, $b);

}

class childClass extends parentClass{
    
    public function calc($c, $d){
        echo $c . " " . $d;
    }

    // public function calc(){ // it show error because argument not match with parent class
    //     echo "Hello";
    // }

}

$test = new childClass();
$test->calc(10, 20);

?>