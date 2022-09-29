<?php
//do not need object call for static variable and function
//From static function you have to call static variable not any public var
// __construct() function not call first for class when static function called
class class10{
    static $num = 10;
    static $num2 = 20;

    function __construct(){
        echo "__construct"; //this is not call in first load
    }

    static function func1(){
        echo "test";
    }

    static function func2(){
        return self::$num2;
    }
}
echo class10::$num;
echo "</br>";
echo class10::func1();
echo "</br>";
echo class10::func2();
