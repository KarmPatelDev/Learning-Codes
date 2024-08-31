<?php

  class Employee{
    //var or public
    // public -> can be accessed from anywhere
    // private -> can be access within a class
    // protected -> can be access ferom within a class or derived class

    //var $name = 'karm';
    // private $name = 'karm'; //error we have to user function // if we make function private then also we can't user function there

    public function showName(){
        echo "$this->name";
    }
  }

  $karm = new Employee();
  echo $karm->name;
//   $karm->showName(); //for access private property using function 

?>

