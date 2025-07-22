<?php 
// what is inheritance in php ?
// inheritance is used to access child class properties by its parent class 
// inheritance is used one class properties by its another class i.e called inheritance 

// inheritance is used by extends keyword 


// types of inheritance 

// a) single inheritance   A=>B
// b) multilvel inheritance 
// c) multiple inheritance 


class A 
{

    public function display()
    {
        $name="Brijesh"."<br>";
        echo $name;

    }

}

class B extends A 
{
    public function display1()
    {
        $age="Hey i am 35 years old";
        echo $age;
    }
}

$obj=new B;
$obj->display();
$obj->display1();


?>