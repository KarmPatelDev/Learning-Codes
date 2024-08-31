<?php

// invoke method run when we use object as like making the function
class abc{
    public $name = "Karm Patel";

    public function hello(){
        echo "Hello " . $this->name;
    }

    public function __invoke(){
        echo "Hello " . $this->name;
    }
}

class calculate{
    public $a = 10;
    public $b = 20;

    public function __invoke(){
        return $this->a + $this->b;
    }
}

$test = new abc();
$test->hello();
$test(); 

$calc = new calculate();
echo $calc();

?>