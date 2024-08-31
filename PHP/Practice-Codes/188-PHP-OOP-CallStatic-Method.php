<?php

// CallStatic invoked when any one want to  invoke the static method from outside
// we have to pass two arguments

class abc{
    private static function hello(){
       echo "This is hello method<br>";
    }

    public static function __callStatic($method, $arguments){
        echo "This is Private Method : $method<br>";
        if(method_exists(__class__, $method)){ // we use classname as first parameter(check method exist in this class)
          
            call_user_func_array([__class__, $method], $arguments); // it find the method and callback it

        }
        else{
            echo "$method is Non Existing Method <br>";
        }
    }
}

abc::hello();

?>