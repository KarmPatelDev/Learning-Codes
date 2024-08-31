<?php

// Magic Method ==> Automatically run based on condition __construct()
// start with two underscore

/*

List Of Magic Methods
__construct()
__destruct()
__get()
__set()
__isset()
__unset()
__autoload()
__clone()
__sleep()
__wakeup()
__call()
__callStatic()
__toString()
__invoke()

*/


class abc{
    __construct(){
       echo "Object is construct";
    }

    __destruct(){
      echo "Object is Destruct";
    }
}

$test = new abc();

?>