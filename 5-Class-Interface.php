<?php
//Interface can only contain abstract function
//in Interface can not define variable
//No constructor in interface
//all function must be public in interface
//Interface supports multiple inheritance

interface class7{
    public function test1();
}

interface class8{
    public function test2();
}

class class9 implements class7,class8{

    public function test1(){
        echo "interface function of class 7";
    }

    public function test2(){
        echo "interface function of class 8";
    }

}
$obj1 = new class9();
$obj1->test1();
echo "</br>";
$obj1->test1();
//real life example