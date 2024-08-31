<?php

class abc{
    public function first(){
        echo "This is first function<br>";
        return $this; // (return current object) // it return object so the second method is run and so on write this code if you have to use the method chaining
    }
    public function second(){
        echo "This is second function<br>";
        return $this; // (return current object) 
    }
    public function third(){
        echo "This is third function<br>"; // for last chain element return not require
    }
}

$test = new abc();
$test->first()->second()->third();

?>