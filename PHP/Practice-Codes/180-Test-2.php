<?php

namespace second{

class test{
    public function __construct(){
        echo "This is Second Page Class<br>";

        $test4 = new \first\test; // run the first namespace class
    }
}

function wow(){
    echo "Wow from Second File.<br>";
}

}

?>