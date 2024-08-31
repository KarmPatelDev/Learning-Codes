<?php

// {class A, class B, class C, class D} => inherite in one class } for this we make interface not class
// in interface we can't make property and value assign the property
// Interface => work like abstract
// All methods are declared but not implemented
// All the method must be implemented in implemented class
// we don't have to use access modifier in interface

interface parent1{
    function calc($a, $b);
}

interface parent52{
    function sub($c, $d);
}

class childClass implements parent1, parent2{
    public function calc($a, $b){ // parameter should be match with interface
        echo $a + $b;
    }

    public function sub($c, $d){
        echo $c - $d;
    }
}

$test = new childClass();
$test->calc(10, 20);
echo "<br>";
$test->sub(50, 20);

?>