<?php

/*
OOP ===>> Object Oriented Programming

Advantage -:
- Code More Modular and Reusable
- Well Organised Code
- Easier To Debug
- Best for medium and large website objects

MVC Frameworks ==> Codeigniter, Laravel, CakePHP, Symfony, Yii, Zend

class calculation{
    public $i;
    public $j;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this-> c;
    }
}

for object
$c1 = new calculation();
$c1->a = 10;
$c1->b = 20;
echo $c1->sum();
*/


class calculation{
    public $i;
    public $j;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this-> c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// for object
$c1 = new calculation();
$c1->a = 10;
$c1->b = 20;
echo $c1->sum() . "<br>";

$c2 = new calculation();
$c2->a = 50;
$c2->b = 20;
echo $c2->sub();

?>