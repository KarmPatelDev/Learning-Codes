<?php

// isset return only two values 0 or 1

$test = "karm";
echo isset($test);

class abc{
    public $name;
    private $course;
    private $detail = ['fname' => 'Karm', 'age' => 20];

    public function setName($course){
        $this->course = $course;
    }

    // public function __isset($property){
    //     echo isset($this->$property);
    // }

    public function __isset($name){
        echo isset($this->detail[$name]);
    }

}

// $test = new abc();
// echo isset($test->name);

// $test->setName("PHP"); // if it is not set to private then below code not give any output
// // __isset function called when we use isset for private or non existing property
// echo isset($test->course); // it show neither 0 nor 1 if it is private or non existing(if __isset method not define)

// for array value check
echo isset($test->fname); // non existing key value not show because it is zero

echo empty($test->fname);  /// if we use empty then also it use invoke the __isset method

?>