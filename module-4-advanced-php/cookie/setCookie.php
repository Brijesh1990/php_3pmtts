<?php 
// setcookie("name","brijesh");
// echo "cookie set successfully";
// for removed cookie  
setcookie("name","brijesh",time()-(60*60));
echo "removed cookie successfully";

?>