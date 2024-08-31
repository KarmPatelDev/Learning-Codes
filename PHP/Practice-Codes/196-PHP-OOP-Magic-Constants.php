<?php

/*
Magic Constants that can be used without OOPS
__LINE__
__FILE__
__DIR__
__FUNCTION__

Magic Constants that can't be used without OOPS
__CLASS__
__METHOD__
__NAMESPACE__
__TRAIT__
*/

namespace MyNamespace;

trait MyTrait{
    public function getTrait(){
        return __TRAIT__; // it print namespace\traitname
    }
}

echo "Line Number : " . __LINE__ . "<br>"; // return line number

echo "File : " . __FILE__ . "<br>";  // return full path of the file

echo "Dir : " . __DIR__ . "<br>";  // return full path of this folder where this current file exist


function sum($a, $b){
    return __FUNCTION__ . " "  . $a + $b . "<br>"; // print the function name
}

echo sum(10, 20);



class myClass{
    use MyTrait;

    public function hello(){
        echo "Class: " . __CLASS__ . "<br>Method : " . __METHOD__ . "<br>Namespace : " . __NAMESPACE__ . "<br>"; // first for namespace\classname and second for namespace\classname::methodname return  and third return namespace name
    }
}

$test = new myClass();
$test->hello();
echo "<br>" . $test->getTrait();


?> 