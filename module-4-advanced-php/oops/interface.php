<?php 
// interface : interface is used to access multiple parent class properties via its child class 
// its work just like support multiple inheritance 
// interface is create an abstractions 

interface A 
{
    public function display1();
}

interface B 
{
    public function display2();
}

interface C 
{
    public function display3();
}

interface D
{
    public function display4();
}

class E implements A,B,C,D

{
    public function display1()
    {
        echo "Brijesh"."<br>";

    } 
    
    public function display2()
    {
        echo "Kaushik"."<br>";
        
    } 

    
    public function display3()
    {
        echo "Harsh"."<br>";
        
    } 
    
    public function display4()
    {
        echo "Kumar"."<br>";
        
    } 
}

$obj=new E;
$obj->display1();
$obj->display2();
$obj->display3();
$obj->display4();
?>