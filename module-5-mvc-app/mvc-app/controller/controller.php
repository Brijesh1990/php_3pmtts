<?php 
// controller : is used to create a logic of your applications 
// controller pass logic data in view 
require_once("model/model.php");
class controller extends model 
{ 

    public function __construct()
    {
        parent:: __construct();
        // logic here 
        // $name="Brijesh Kumar pandey";
        // echo $name;


        // w.a.p to check a years is leap year or not 
        if(isset($_POST["chk"]))
        {
            $year=$_POST["year"];
            if($year%4==0)
            {
                echo "Leap years";
            }
            else 
            {
                echo "not a leap years";
            }
        }

    }
     
}

$obj=new controller;


?>