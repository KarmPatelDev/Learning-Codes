<?php

/*

try{
    if(condition){
    //When Condition is True
    }
    else{
        //When Condition is False
        throw new Exception("Some Message Goes Here"); // it throw exception error and go to catch function
    }
}
catch(Exception $e){ //Exception is inbuilt class, $e is object
    // it has inbuilt php function
    echo $e->getMessage(); // it show the message that thrown
    echo $e->getLine(); // it show line number which has error
    echo $e->getCode(); // it show where through which line code start
    echo $e->getFile(); // in which file the error occur
}

*/

class MyException extends Exception{ // inherited from Exception inbuilt function
    function errorMessage(){
        $error = "My Exception Message : " . $this->getMessage() . "<br> Error On line Number " . $this->getLine() . "<br>";
        return $error;
    }
}

function division($n){
    try{
        if($n <= 0){
            throw new Exception("Enter The Valid Number");
        }

        if($n == 3){
            throw new MyException("Number is 3"); // for own exception
        }
    
        $div = 2 / $n;
        echo $div . "<br>";
    }
    catch(MyException $e){
        echo $e->errorMessage() . "<br>";
    }
    catch(Exception $e){
        echo $e->getMessage() . "<br>";
        echo $e->getLine() . "<br>";
        echo $e->getCode() . "<br>"; // our program start from 0th line
        echo $e->getFile() . "<br>";
    }
    finally{  // it is show every time (error is occur or not occur)
        echo "Finally<br>";
    }
}

division(2);
division(0);
division(4);
division(3);

?>