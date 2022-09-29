<?php

class class3{
    //Accessive property of one to another class is Inheritance

    function __construct(){
        $this->x = 1;
        echo "</br> construct3";
    }

    public function func1(){
        echo "func1";
    }
}

class class4 extends class3{
    function __construct(){
        echo "construct4";
        $this->x = 2;
        Parent::__construct(); //To call parent call __construct()
//        $this->x = 2;
    }

    public function func1(){
        echo "func2";
    }
}

// Parent class __construct() will not call if extends a class
// but if Parent::__construct() is call then can access parent call Parent::__construct();
$obj1 = new class4();


//this is accessing parent class variable because
// Parent::__construct() is called last
echo "</br>" . $obj1->x;