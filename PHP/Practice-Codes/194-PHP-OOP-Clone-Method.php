<?php

//copy by value
//copy by reference

// copy by value
/*
$a = 5;
$b = $a;
$b = 10;
echo $b . " " . $a;
*/

//copy by reference
/*
$a = 5;
$b = & $a; // $b has $a address
$b = 10;
echo $b . " " . $a;
*/

class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }

    public function setCourse(course $c){ // course object
        $this->course = $c;
    }

    public function __clone(){ // it is clone the proper subclass also
        $this->course = clone $this->course; //this is method for make copy by value
    }
}

class course{
    public $cname;

    public function __construct($cn){
        $this->cname = $cn;
    }
}

/*
$student1 = new student("Karm Patel");
echo $student1->name . "<br>";

// $student2 = $student1; // it is by default copy by reference for that problem we use clone keyword
$student2 = clone $student1;
$student2->name = "Ram Kumar";

echo $student1->name . "<br>";
echo $student2->name . "<br>";
*/


$course1 = new course("PHP");
echo $course1->cname;

$student3 = new student("Karm Patel");
$student3->setCourse($course1);

$student4 = clone $student3;  // sub object not change (two has cname = python) if we don't use __clone method
$student4->name = "Ram Kumar";
$student4->course->cname = "Python";

echo "<pre>";
print_r($student3);
echo "</pre>";

echo "<pre>";
print_r($student4);
echo "</pre>";


?>