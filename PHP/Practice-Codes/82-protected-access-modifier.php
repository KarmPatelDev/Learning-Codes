<?php

   class Employee{
    public $name;
    public $lang;
    public $salary;

    public function __construct($name, $lang, $salary){
        $this->name = $name;
        $this->lang = $lang;
        $this->salary = $salary;
    }
    
    public function desc1(){
        $this->describe();
        $this->desc2();
    }

    private function describe(){
        echo "Name: $this->name <br>";
        echo "Language: $this->lang <br>";
        echo "Salary: $this->salary <br>";
    }

    protected function desc2(){
        echo "Name: $this->name <br>";
        echo "Language: $this->lang <br>";
        echo "Salary: $this->salary <br>";
    }

   }

   class Programmer extends Employee{

    public function desc3(){
        //  $this->describe(); // it show error because private not inherited protected and public inherite
        $this->desc2();
    }

   }

   $karm = new Employee("karm", "gujarati", 20000);
   $karm->desc1();

   $karm2 = new Programmer("karm", "gujarati", 20000);
   $karm2->desc3();

?>