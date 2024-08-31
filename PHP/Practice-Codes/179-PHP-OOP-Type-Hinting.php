<?php

// Valid DataType -: int, float, string, bool, Array, Class/Interface Name, Object

/*
function sum(int $value){
    echo $value + 10;
}
sum(10);
// sum("Hello"); // it show error because we can pass only int
*/

/*
function sum(float $value){
    echo $value + 10.2;
}
sum(10.8);
*/

/*
function hello(string $name){
    echo "Hello, " . $name;
}
hello("Karm Patel");
*/

/*
function fruits(array $names){
    foreach($names as $name){
        echo $name . " ";
    }
}
$test = ["Apple", "Banana", "Graps", "Mango", "Pineapples", "Watermallon"];
fruits($test);
*/

/*
class hello{
    public function sayhello(){
        echo "Hello";
    }
}

class bye{
    public function saybye(){
        echo "Bye";
    }
}

function wow(hello $c){
    $c->sayhello();
}

// $test = new bye();  
// wow($test);  // it show error because object is of bye class

$test = new hello();  
wow($test);  // it show error because object is of bye class
*/

/*
class school{
    public function getNames(student $names){
        foreach($names->Names() as $name){
            echo $name . " ";
        }
    }
}

class student{
    public function Names(){
        return ["Ram", "Kishan", "Gopal"];
    }
}

class library{}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);
*/

?>