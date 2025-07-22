<?php 
class Model 
{
    public $con="";
    public function __construct()
    {

        try 
        {
         $this->con=new mysqli("localhost","root","","smsapp"); 
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));
        }

    }

}

?>