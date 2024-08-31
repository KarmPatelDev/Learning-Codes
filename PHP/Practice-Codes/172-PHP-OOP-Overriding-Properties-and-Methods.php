<?php

class A{
    public $name = "A Parent Class";

    public function show(){
        echo "Name is " . $this->name . "<br>";
    }
}

class B extends A{
    public $name = "B Child Class";

    public function show(){
        echo "Name is " . $this->name . "<br>";
    }
}

$test = new A();
echo $test->name;
echo $test->show();

$test = new B();
echo $test->name;
echo $test->show();
?>