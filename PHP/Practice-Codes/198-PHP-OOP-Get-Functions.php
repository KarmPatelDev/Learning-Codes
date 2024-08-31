<?php

/*
Get Functions
get_class
get_parent_class
get_class_methods
get_class_vars
get_object_vars
get_called_class
get_declared_classes
get_declared_interfaces
get_declared_traits
class_alias
*/

interface inter1{

}

trait trait1{

}

class myClass{

    public $name;
    public $course;

    function name(){
        echo "class name : " . get_class($this) . "<br>";
    }

    public function hello(){
        echo "Hello Friends!";
    }

}

class myClassChild extends myClass{

}

$test = new myClass();
$test2 = new myClassChild();

echo "class name : " . get_class($test) . "<br>"; // for class name

echo "Parent Class Name : " . get_parent_class($test2) . "<br>"; // for parent class name
echo "Parent Class Name : " . get_parent_class('myClassChild') . "<br>"; 

$class_methods = get_class_methods('myClass'); // return array of method in class // private function not show from outside use from inside
echo "<pre>";
print_r($class_methods);
echo "</pre>";

$class_var = get_class_vars('myClass'); // return associative array of properties name and value in class // private variables not show from outside use from inside
$test->name = "karm patel"; // the value is not show in associative array it show by default value that we added first
echo "<pre>";
print_r($class_var);
echo "</pre>";

$object_var = get_object_vars($test); // return associative array of properties name and value in object // private variables not show from outside use from inside
$test->name = "karm patel"; // NOTE: it is show the new value also
echo "<pre>";
print_r($object_var);
echo "</pre>";


class Base{
   static public function test(){
      var_dump(get_called_class()); // it return which class through it is called
   }
}

class Derived extends Base{

}

Base::test();
Derived::test();

echo "<pre>";
print_r(get_declared_classes()); // it return array of all classes defined in this page [also some extra classes]
echo "</pre>";

echo "<pre>";
print_r(get_declared_interfaces()); // it return array of all interfaces defined in this page [also some extra interfaces]
echo "</pre>";

echo "<pre>";
print_r(get_declared_traits()); // it return array of all traits defined in this page
echo "</pre>";

class A{
    public $name;
}

class_alias("A", "mc"); // we can make alias now we can use A and mc two name two make objects and other actions on class

$test3 = new mc();
$test3->name = "Karm Patel";
echo $test3->name;

$test4 = new A();
$test4->name = "Patel Karm";
echo $test4->name;

?>