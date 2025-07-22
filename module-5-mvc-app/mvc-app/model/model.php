<?php 
// mvc stands for model | view | controller 
// mvc is an structure i.e used to create a dynamic website or web apps 
// mvc is secured 
// mvc support oops concepts 
// Model : model is used to create database connection 
// Model is used to create a member function of applications 
// Model create database connection
class model 
{
    public $conn="";
    public function __construct()
    {
        // create a database connection 
        try 
        {
         $this->conn=new mysqli("localhost","root","","mvcapp");
         
         //echo "connection successfully";
        }
        catch(Exception $err)
        {
          die(mysqli_error($err));
        }

    }
}

?>