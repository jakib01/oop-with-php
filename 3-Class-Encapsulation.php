<?php

class class5{
    public $num1;
    protected $num2;
    private $num3;
    public function __construct(){
        $this->num1 = 20;
        $this->num2 = 30;
        $this->num3 = 50;
    }
//    public function func1(){
//        return $this->num2; //can access $num2 in this class
//    }

    //to access protected variable or function outside class then have to use getter setter
    function getNum(){
        return $this->num2;
    }
    function getNum1(){
        return $this->num3;
    }
}

$obj1 = new class5();

$obj1->num1 = 100; //$num1 is a public variable that we can overwrite the value
//$obj1->num2 = 100; //$num2 is a protected variable we can not access $num2 outside this class
echo "</br> ---Class 5 start--- </br>";
echo $obj1->num1 . "</br>";
echo $obj1->getNum()."</br>";

class class6 extends class5{
    public function getNum(){
        return $this->num2;
    }

    public function getNum1(){
//        return $this->num3; // in extends class private variable or function can not be access
    }
}

$obj2 = new class5();
echo "</br> ---Class 6 start--- </br>";
echo $obj2->getNum() . "</br>"; //accessing class 5 protected var in extends class:

$obj3 = new class5();
echo $obj3->getNum1(). "</br>";//

// If public variable or function can access outside class
// If Protected variable or function can access outside class with getter setter to access form child class
// If Private variable or function can not access outside that class even if class extends or getter setter