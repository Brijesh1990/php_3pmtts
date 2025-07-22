<?php 
class Model 
{
    public $con="";
    public function __construct()
    {

        try{
            $this->con=new mysqli("localhost","root","","flydb");
            //  echo "connected successfully with database";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con,$e));
        }

    }
}



?>