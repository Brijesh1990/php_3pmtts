<?php 
require_once("model/model.php");
class AdminController extends AdminModel 
{
public function __construct()
{
parent:: __construct();
// create a logic to insert Flight type
if(isset($_POST["addflighttype"]))
{
date_default_timezone_set("Asia/Kolkata");
// create a logic to insert flight type    
$flighttype=$_POST["flighttype"];
$flightdesc=$_POST["flightdesc"];
$added_date=date("Y-m-d H:i:s");
$data=array("type"=>$flighttype,"descriptions"=>$flightdesc,"added_date"=>$added_date);
$chk=$this->inseralldata('tbl_flight_type',$data);

if($chk)
{
echo "<script>
alert('THanks flight type added successfully');
window.location.href='flight-type';
</script>";
}
else
{
    echo "<script>
    alert('something went wrong please try again');
    window.location.href='flight-type';
    </script>";
}
}

// create a logic for display flight type 
$shwflighttype=$this->showalldata('tbl_flight_type');

// create a logic to load templates
if(isset($_SERVER["PATH_INFO"]))
{
switch($_SERVER["PATH_INFO"])
{
case '/':
require_once("index.php");    
require_once("login.php");
break;

case '/dashboard':
require_once("index.php");   
require_once("sidebar.php"); 
require_once("header.php");   
require_once("content.php");
require_once("footer.php");
break;


case '/managecustomers':
require_once("index.php");   
require_once("sidebar.php"); 
require_once("header.php");   
require_once("managecustomer.php");
require_once("footer.php");
break;


case '/flight-type':
require_once("index.php");   
require_once("sidebar.php"); 
require_once("header.php");   
require_once("flighttype.php");
require_once("footer.php");
break;


case '/addflight':
    require_once("index.php");   
    require_once("sidebar.php"); 
    require_once("header.php");   
    require_once("addflight.php");
    require_once("footer.php");
    break;

    
case '/manage-flight-type':
    require_once("index.php");   
    require_once("sidebar.php"); 
    require_once("header.php");   
    require_once("manageflighttype.php");
    require_once("footer.php");
    break;
    

default: 
require_once("header.php");
require_once("404.php");
require_once("footer.php");
break;
}
} 
}
}
$obj=new AdminController;

?>