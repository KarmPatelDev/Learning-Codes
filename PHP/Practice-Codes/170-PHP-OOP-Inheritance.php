<?php

/*
// Base Class(Parent Class)
// Derived Class(Child Class)

class fruit{
  // only use fruit property and methods
}

class vegitable extends fruits{
  // it can use fruit and vegitable both property and methods
}
*/

class Employee{
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function show(){
        echo "<h3>Employee Profile</h3>";
        echo "Emplyee Name -> " . $this->name . "<br>";
        echo "Emplyee Age -> " . $this->age . "<br>";
        echo "Emplyee Salary -> " . $this->salary . "<br>";

    }
}

class Manager extends Employee{
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function show(){
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager Profile</h3>";
        echo "Manager Name -> " . $this->name . "<br>";
        echo "Manager Age -> " . $this->age . "<br>";
        echo "Manager Salary -> " . $this->totalSalary . "<br>";

    }
}

$e1 = new Employee("Karm", 25, 20000);
$e1->show();

$e2 = new Manager("Ram", 30, 40000);
$e2->show();


?>