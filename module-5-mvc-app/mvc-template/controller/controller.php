<?php 
require_once("model/model.php");
class Controller extends Model 
{
public function __construct()
{
parent:: __construct();
// create a logic to load templates
if(isset($_SERVER["PATH_INFO"]))
{
switch($_SERVER["PATH_INFO"])
{
case '/':
require_once("index.php");
require_once("header.php");
require_once("slider.php");
require_once("content.php");
require_once("footer.php");
break;

case '/create-account':
require_once("index.php");
require_once("header.php");
require_once("account.php");
require_once("footer.php");
break;

case '/Login':
require_once("index.php");
require_once("header.php");
require_once("login.php");
require_once("footer.php");
break;


case '/flight-booking':
require_once("index.php");
require_once("header.php");
require_once("flight-booking.php");
require_once("footer.php");
break;



case '/contact-us':
    require_once("index.php");
    require_once("header.php");
    require_once("contact-us.php");
    require_once("footer.php");
    break;

    
case '/our-services':
    require_once("index.php");
    require_once("header.php");
    require_once("services.php");
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
$obj=new Controller;

?>