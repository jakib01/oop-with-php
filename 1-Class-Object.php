<?php

class class1{

    public $x = 10; //this is a public variable can access form other class
    public function func1(){
        return $this->x++; //$this is used to access a variable form same class
    }

    public function func2($y){
        return $this->x + $y;
    }

}

$obj1 = new class1(); //Object of a class
$obj2 = new class1(); //Object of a class

$obj1->func1();
$sum = $obj2->func2(50); //getting returned value form func2() in a variable $sum
echo "</br> ---Class 1 start--- </br>";
echo "Object 2 value = ". $obj2->x ."<br/>"; //can access class1 variable $x = 10
echo "Object 1 value = ". $obj1->x ."<br/>"; //can access and getting class1 value after increment from func1
echo "Object 1 value = ". $sum ." </br>";


class class2{

    public $a;  //this will not affect on variable

    public function __construct($c){
        $this->a = $c; // __construct() is call when a class is called
        $this->b = 100; // __construct() is call when a class is called
    }

    public function func1(){
        echo "Value of variable a = ". $this->a; // $this->a is a variable which is public can also define in __construct()
    }

    public function __destruct(){
        echo "</br> End"; //__destruct() call in the end
    }
}

echo "</br> ---Class 2 start--- </br>";
$objC2 = new Class2(10); //passing value in __construct() function
$objC2->func1();
echo "</br> value of variable b = ". $objC2->b;

?>