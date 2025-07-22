<?php 
class A 
{
    public $name1="Hi Brijesh";
    public function display1()
    {
        echo $this->name1."<br>";
    }
}
class B extends A  
{
    public $name2="Hi Sanket";
    public function display2()
    {
        echo $this->name2."<br>";
    }
}

class C extends B  
{
    public $name3="Hi Harsh";
    public function display3()
    {
        echo $this->name3."<br>";
    }
}

class D extends C 
{
    public $name4="Hi Kaushik";
    public function display4()
    {
        echo $this->name4."<br>";
    }
}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();
$obj->display4();




?>