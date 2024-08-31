<?php

/*
trait Test{
    public function hello(){
        echo "Hello";
    }
}

class A{
    use Test;

    public function hello(){  // first priority for class define methods
        echo "Say Hello";
    }
}

$test = new A();
$test->hello();
*/

/*
trait Test{
    public function hello(){
        echo "Hello";
    }
}

class A{
    public function hello(){  
        echo "Say Hello";
    }
}

class B extends A{
    use Test; // first priority to trait instead of parent class

    public function hello(){   // highest priority to current class method
        echo "Say Hello Hello";
    }
}

$test = new B();
$test->hello();
*/

/*
trait Test{
    public function hello(){
        echo "Hello Test";
    }
}

trait Test2{
    public function hello(){
        echo "Hello Test2";
    }
}

class A{
    // use Test, Test2; // it show error because both have same method hello
    // for this error remove we use below code
    use Test, Test2{
        Test::hello insteadof Test2; // it call Test hello method instead of Test2 hello method
        Test2::hello as newHello;  // it rename Test2 hello method to newHello
    }

}

$test = new A();
$test->hello();
echo "<br>";
$test->newHello();
*/

trait Test{
    private function hello(){
        echo "Hello Test";
    }
}

class A{
    use Test{
        Test::hello as public newHello; // it make Test hello method private to public and also rename it to newHello
    }
}

$test = new A();
// $test->hello(); // it show error (solve using removing newHello)
$test->newHello();

?>