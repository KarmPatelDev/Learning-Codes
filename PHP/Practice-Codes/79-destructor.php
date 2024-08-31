<?php

class Employee{
    public $name;
    public $salary;

    // constructor -> it allows you to intialize objects. it is the code which is executed whenever a new project is instantiated.

    function __construct($name, $salary){
        echo 'This is constructor for employee';
        $this->name = $name;
        echo $this ->name;
        $this -> salary = $salary;
        echo $this ->salary;

    }

    function __destruct(){
        echo "I am destructing $this->name <br>";
    }

}

    $karm = new Employee('Karm', 200000);
    echo "<p>The salary of karm is $karm->salary per month.</p>";

    $abhay = new Employee('abhay', 200000);
    echo "<p>The salary of karm is $abhay->salary per month.</p>";

    $dhyey = new Employee('dhyey', 200000);
    echo "<p>The salary of karm is $dhyey->salary per month.</p>";


?>