<?php
// In traits we can make methods and the use it into many class

trait Test{
    public function hello(){
        echo "Hello";
    }

    public function hy(){
        echo "Hy";
    }
}

trait Test2{
    public function bye(){
        echo "bye";
    }
}

class A{
    use Test, Test2;
}

class B{
    use Test, Test2;
}

$test2 = new A();
$test2->hello();
$test2->hy();
$test2->bye();

$test3 = new B();
$test3->hello();
$test3->hy();
$test3->bye();

?>