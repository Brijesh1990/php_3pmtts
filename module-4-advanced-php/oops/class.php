<?php 
/* class is a group of member and its member functions i.e called class
   or 

   A class is a blue print of an object 
   
   or 
   
   A class is nothing whenever we can not create its object 

   syntax 

   class classname 
   {
      
   public function functioname()
   {

   statements;
   
   }
   
   }

   create an object of class 

*/

class Name 
{
    public function display()

    {
        $name="Brijesh kumar pandey";
        echo $name;
    }
}

$obj=new Name; // object of class A
$obj->display(); 


?>