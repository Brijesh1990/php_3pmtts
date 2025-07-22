<?php 
require_once("model/model.php");
class Controller extends Model 
{

    public function __construct()
    {
        parent:: __construct();
        // create a login of admin login
        if(isset($_POST["adminlogin"]))
        {
          $email=$_POST["email"];
          $password=$_POST["password"];
          $chk=$this->adminlogin('tbl_admin',$email,$password);
          if($chk)
          {
            echo "<script>
            alert('You are Logged in as Admin successfully')
            window.location='./dashboard';
            </script>";  
          }
          else 
          {

            echo "<script>
            alert('Youe email and password are Incorect try again')
            window.location='./';
            </script>";  
          }
        }

        // create a logic to change password 
        if(isset($_POST["changepass"]))
        {
          $id=$_SESSION["aid"];
          $opass=$_POST["opass"];
          $npass=$_POST["npass"];
          $cpass=$_POST["cpass"];
          $chk=$this->changepassword('tbl_admin',$opass,$npass,$cpass,$id);
           if($chk)
          {
            unset($_SESSION["aid"]);
            unset($_SESSION["email"]);
            session_destroy();
            echo "<script>
            alert('Your password are changed successfully')
            window.location='./';
            </script>";  
          }
          else 
          {
            echo "<script>
            alert('Your Old,new and confirmed Password does not matched try again')
            window.location='./changepassword';
            </script>";  
          }

        }
        // logout here
        if(isset($_GET["logout-here"]))
        {
          $chk=$this->logout();
           if($chk)
          {
            echo "<script>
            alert('You are successfully Logout as Admin')
            window.location='./';
            </script>";  
          }
        }
        // view load here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/': 
                    require_once("index.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                      case '/dashboard': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                    break;
                       
                    case '/changepassword': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                    break;



                      default: 
                    require_once("index.php"); 
                    require_once("404.php");
                   
                    break;
            }
        }
    }

}
$obj=new Controller;

?>