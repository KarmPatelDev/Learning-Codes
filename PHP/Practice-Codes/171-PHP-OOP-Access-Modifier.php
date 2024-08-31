<?php

/*
                 class itself        outside class         derived class
public             yes                   yes                     yes
protected          yes                    no                     yes
private            yes                    no                      no
*/

/*
// public
class Base{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name: " . $this->name . "<br>";
    }
}

$test = new Base("Karm Patel");
$test->show();
$test->name = "Patel Karm";
$test->show();
*/

/*
// Protected
class Base{
    protected $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name: " . $this->name . "<br>";
    }

    protected function show2(){
        echo "Your Name: " . $this->name . "<br>";
    }
}

class Derived extends Base{
    public function showDerive(){
        $this->show2();
    }
}

$test = new Base("Karm Patel");
$test->show();
// $test->name = "Patel Karm"; // it show error
// $test->show2();

$test2 = new Derived("Patel Karm");
$test2->showDerive();
*/

/*
// Private
class Base{
    private $name;

    public function __construct($n){
        $this->name = $n;
    }

    private function show2(){
        echo "Your Name: " . $this->name . "<br>";
    }

    public function show(){
        $this->show2();
    }

    
}

class Derived extends Base{
    public function showDerive(){
        echo "Your Name: " . $this->name . "<br>";
    }
}

$test = new Base("Karm Patel");
$test->show();
// $test->name = "Patel Karm"; // it show error
// $test->show2();

$test2 = new Derived("Patel Karm");
// $test2->showDerive();  // we can't access private in derived class
*/

?>