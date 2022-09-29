<?php
//multi level inheritance of class can call all the function of parent classes
//Every function is unnecessary to call from child class this is why traits come
//multi trait can be use like use t1,t2

trait class12{
    function func1(){
        echo "func1 from class12";
    }
}

class class13{
    use class12; //this class is inheriting class12 by use
    function func2(){
        echo "func2 from class13";
    }
}

class class14{
    function func3(){
        echo "func3 from class14";
    }
}

class class15{
    use class12,class16; //multiple traits can be use
    function func4(){
        echo "func4 from class15";
    }
}

trait class16{
    function func5(){
        echo "func5 from class16";
    }
}

$obj1 = new class13();
$obj1->func1();
echo "</br>";
$obj1->func1();
echo "</br>";

$obj2 = new class14();
//$obj2->func1(); //this function can not access because of class14 have no use of trait class

$obj3 = new class15();
$obj3->func1();
echo "</br>";

$obj4 = new class15();
$obj4->func5();
