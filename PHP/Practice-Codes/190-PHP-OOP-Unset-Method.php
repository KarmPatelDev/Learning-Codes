<?php

// $test = "Karm Patel";
// echo $test;
// unset($test);
// echo $test;


class abc{
    public $name = "karm";
    private $course;

    public function show(){
        echo $name . " " . $course . "<br>";
    }

    public function setName($course){
        $this->course = $course;
    }

    public function __unset($property){
        unset($this->$property);
    }

}


$test = new abc();


echo "<pre>";
print_r($test);
echo "</pre>";


unset($test->name);

echo "<pre>";
print_r($test);
echo "</pre>";

$test->setName("PHP"); 


echo "<pre>";
print_r($test);
echo "</pre>";


// __unset function called when we use unset for private or non existing property
unset($test->course);


echo "<pre>";
print_r($test);
echo "</pre>";

$test->show();

?>