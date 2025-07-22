<?php 
class Model 
{
    public $con="";
    public function __construct()
    {
        session_start();

        try 
        {
         $this->con=new mysqli("localhost","root","","smsapp"); 
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->con));
        }

    }
    // create a member function for admin Login 
    
    public function adminlogin($table,$email,$password)
    {
    $select="select * from $table where email='$email' and password='$password'"; 
    $query=mysqli_query($this->con,$select);
    $fetch=mysqli_fetch_array($query);
    $num_row=mysqli_num_rows($query);
    if($num_row==1)
    {
        $_SESSION["aid"]=$fetch["aid"];
        $_SESSION["email"]=$fetch["email"];
        return true;
    }
    else 
    {
        return false;
    }
    }

    // create a member function for change password 
    public function changepassword($table,$opass,$npass,$cpass,$id)
    {
        // select old password 
        $id=$_SESSION["aid"];
        $sel="select password from $table where aid='$id'"; 
         $query=mysqli_query($this->con,$sel);
         $fetch=mysqli_fetch_array($query);
         $password=$fetch["password"];
         if($opass==$password && $npass==$cpass)
         {
        $upd="update $table set password='$npass' where aid='$id'"; 
           $query=mysqli_query($this->con,$upd);
           return true;
         }
         else 
         {
          return false;
         }

    }


    // create a member function for Logout as admin 
    public function logout()
    {
        unset($_SESSION["aid"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }

}

?>