<?php 

// An object is a instance of class i.e called object 
// An object is created by new  keyword of class name 
// new A() is a object 

class A 
{
    public function display()
    {
        $a=10;
        $b=20;
        $c=$a+$b;
        echo "Additions of numbers is :".$c;

    }
}

$obj=new A;
$obj->display(); // here new A is an object of class A 



?>