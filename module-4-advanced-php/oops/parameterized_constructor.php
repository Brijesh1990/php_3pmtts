<?php 

// __construct()
// class A 
// {
//     public function __construct($a,$b)
//     {
        
//         echo "The additions of numbers is :".$a+$b;
//     }
// }

// $obj=new A(20,30);



// class A 
// {
//     public function __construct($a,$b)
//     {
        
//         echo "The additions of numbers is :".$a+$b;
//     }
// }
// class B extends A
// {
//     public function __construct()
//     {
//         echo "Thanks for additions";
//     }
// }
// $obj=new B(20,30);


class A 
{
    public function __construct()
    {
        
        echo "Hi Brijesh"."<br>";
    }
}
class B extends A
{
    public function display()
    {
        echo "Thanks kaushik";
    }
}
$obj=new B;
$obj->display();




?>