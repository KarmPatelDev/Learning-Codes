<?php

// it invokes toString magic function when any one want to print object as a string
class abc{
    public function __toString(){
        return "You Can't Print Object As a String : " . get_class($this); // get_class($this) for vurrent class name
    }
}

$test = new abc();
echo $test;

?>