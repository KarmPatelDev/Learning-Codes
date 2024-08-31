<?php

// It take two parameters

class abc{
    private $fname;
    private $lname;

    private function hello($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __call($method, $arguments){
        echo "$method is Private or Non Existing Method";
        print_r($arguments);
        if(method_exists($this, $method)){
          
            call_user_func_array([$this, $method], $arguments); // we callback the method using this first parameter for method and second for argument it is call the method from where it is before called(echo $test->hello("Karm", "Patel");)

        }
        else{
            echo "$method is Non Existing Method";
        }
    }
}

$test = new abc();
echo $test->hello("Karm", "Patel"); // when private or non existing method call it invoke
echo "<pre>";
print_r($test); // we can use for object
echo "</pre>";
?>