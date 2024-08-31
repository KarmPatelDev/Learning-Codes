<?php

class personal{
    protected static $name = "Patel";

    public function show(){
        echo self::$name;
    }

    public function show2(){
        echo static::$name;
    }
}

class accounts extends personal{
    public static $name = "Karm";
}

$test = new personal();
$test->show();

$test = new accounts(); // it print data which class self is declare(for base class data  ==> self)
$test->show();

$test = new personal();
$test->show2();

// ==> Late Static Binding
$test = new accounts(); // it print data which has class static is declare(for derived class data ==> static)
$test->show2();


?>