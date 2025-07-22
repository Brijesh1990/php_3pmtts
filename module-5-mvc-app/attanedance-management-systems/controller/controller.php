<?php 
require_once("model/model.php");
class Controller extends Model 
{

    public function __construct()
    {
        parent:: __construct();
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
                       
                    case '/manage-attendance': 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manageattendance.php");
                    require_once("footer.php");
                    break;

                    


                      default: 
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;
            }
        }
    }

}
$obj=new Controller;

?>