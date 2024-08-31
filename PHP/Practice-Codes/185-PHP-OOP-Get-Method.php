<?php

// We access private or non existing property then the get magic function invoke

class abc{
    private $name = "Karm Patel";
    private $data = ["name" => "Karm", "course" => "PHP", "fee" => 2000];

    public function hello(){
        echo "Hello " . $this -> name;
    }

    public function __get($key){ // it must take one argument
        echo "This is Private or Non Existing Property => ($key)";
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }
        else{
            return "The key ($key) is not defined";
        }
    }
}

$test = new abc();
// $test->name;

echo "<pre>";
print_r($test->data);
echo "</pre>";

echo $test->name;
echo $test->course;
echo $test->fee;
echo $test->age;

?>