<?php

// Constructor use for initialization

class person{
    public $name, $age;

    function __construct($name = "No Name", $age = 9){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " - " . $this->age . "<br>";
    }
    
}

$p1 = new person();
echo $p1->show();
$p2 = new person("Karm");
echo $p2->show();
$p3 = new person(25); // name = 25
echo $p3->show();
$p4 = new person("Karm", 25);
echo $p4->show();

?>