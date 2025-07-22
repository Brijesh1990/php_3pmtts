<?php 
// multiple inheritance is not supported by php | java | javascript its onl support by c++ and python

// multiple parent class properties can not access by its one child class 

class A 
{
    public function display1()
    {
        echo "Brijesh"."<br>";
    }
}

class B 
{
    public function display2()
    {
        echo "Kaushik"."<br>";
    }
}


class C 
{
    public function display3()
    {
        echo "Dixit"."<br>";
    }
}


class D extends A,B,C 
{
    public function display4()
    {
        echo "Hi Kumar";
    }
}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();
$obj->display4();

?>