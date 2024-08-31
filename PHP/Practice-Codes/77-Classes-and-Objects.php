<?php

   class Player{

     public $name;
     public $speed = 3;
     public $run = false;

     function setName($name){
        $this->name = $name;
     }

     function getName(){
        return $this->name;
     }

     function run(){
        $this->run = true;
     }

     function stopRun(){
        $this->run = true;
     }
   }

   $player1 = new Player();
   $player1->setName('Karm');
   echo $player1->getName();

   $player2 = new Player();
   $player2->setName('I am');
   echo $player2->getName();
   $player2->run();
   echo $player2-> run;

?>