<?php

//same operation/function may be behave differently in different class
//Implements through Abstract class, Interface

//Abstract
abstract class class17{
    abstract function func();
}

class class18 extends class17{
    function func() {
        echo "func from class18";
    }
}

class class19 extends class17{
    function func() {
        echo "func from class19";
    }
}
//same function but behave will be different
$obj1 = new class18();
$obj1->func();


//Interface
interface class20{
    function func();
}

class class21 implements class20{
    function func() {
        echo "func from class21";
    }
}

class class22 implements class20{
    function func() {
        echo "func from class22";
    }
}
//same function but behave will be different
$obj1 = new class22();
$obj1->func();