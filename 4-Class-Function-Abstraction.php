<?php
// Abstract class means incomplete
// There has to be at-least one function
// abstract function must declare not implements
// abstract class don't create object
// Inherited abstract class must have abstract function
// Abstract function has no body

abstract class bank{
    abstract function func1();
    abstract function func2();
}

class scb extends bank{
    function func1() {
        echo "abstract function scb1";
    }
    function func2() {
        echo "abstract function scb2";
    }
}

class ific extends bank{
    function func1() {
        echo "abstract function ific1";
    }

    function func2() {
        echo "abstract function ific2";
    }
}

//if a function is mandatory from parent class to child class then we can use abstract function
$obj1 = new scb();
$obj2 = new ific();
$obj1->func1();
echo "</br>";
$obj2->func2();