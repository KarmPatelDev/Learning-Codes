<?php

/*
Conditional Functions
class_exists()
interface_exists()
method_exists()
trait_exists()
property_exists()
is_a()
is_subclass_of()
*/

interface MyInterface{

}

trait trait1{
    public function hy(){
        echo "hy";
    }
}

class MyClass{
    public $name = "karm Patel";
    public function hello(){
        echo "Hello";
    }
}

if(class_exists('MyClass')){ // class exists or not
   echo "This Class is Exists";
}
else{
   echo "This class is Not Exist";
}

if(interface_exists('MyInterface')){ // interface exists or not
   echo "This Interface is Exists";
}
else{
   echo "This Interface is Not Exist";
}

$test = new MyClass();
if(method_exists($test, 'hello')){ // Method exists or not
  echo "This Method is Exists";
}
else{
   echo "This Method is Not Exist";
}

if(trait_exists('trait1')){ // Trait exists or not
    echo "This Trait is Exists";
}
else{
     echo "This Trait is Not Exist";
}

if(property_exists('MyClass', 'name')){ // Property exists or not
  echo "This Property is Exists";
}
else{
   echo "This Property is Not Exist";
}

$test2 = new MyClass();
if(is_a($test2, 'MyClass')){   // check particular object is object of particular class or not
    echo "test2 is a object of MyClass";
}
else{
    echo "test2 is not a object of MyClass";
}


class Base{

}
class Derived extends Base{

}
$test3 = new Derived();
if(is_subclass_of($test3, 'Base')){  // check particular object is object of subclass of particular class or not
    echo "test3 is object of class that is child of Base class(subclass of Base Class)";
}
else{
    echo "test3 is not a object of class that is child of Base class(subclass of Base Class)";
}

?>