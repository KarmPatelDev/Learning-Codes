<?php
 
   class Employee{

    public $name = "karm";
    private $salary = 12000;
    protected $grade = 3;

    function showName(){
        echo "The Name of this employee is $this->name <br>";
    }

    function showSalary(){
        echo "The salary of this employee is $this->salary <br>";
    }
   }

   // inherited from Employee
   class Programmer extends Employee{
       private $lang = "php";

       function changeLang($lang){
        $this->lang = $lang;
       }

       
    function showName2(){
        echo "The Name of this employee is $this->name <br>";
    }

    function showSalary2(){
        echo "The salary of this employee is $this->salary <br>";
    }
    
   }


//    $karm = new Employee();
//    $karm->showName();

    $karm = new Programmer();
    $karm->showName();
    echo $karm->name;
    $karm->showName2();
    $karm -> showSalary();
    // $karm->showSalary2(); // it show error because salary is private property of Employee not inherited to Programmer



?>