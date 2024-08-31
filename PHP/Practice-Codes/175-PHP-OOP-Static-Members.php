<?php

// static members we can use without objects
// if all member and functions are static then it is called static class

class Base{

    public static $name = "Karm Patel";

    public static function show(){
         echo self::$name; // 
    }

    public function __construct($n){
        self::$name = $n;
        self::show();
    }

}

class Derived extends Base{
    public function show2(){
        echo parent::$name;
    }
}


// echo Base::$name;
// Base::show();

// $test = new Base("Patel Karm");

$test = new Derived("Karm Patel");
$test->show2();

?>