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

}

    $karm = new Employee('Karm', 200000);
    echo "<p>The salary of karm is $karm->salary per month.</p>";


?>