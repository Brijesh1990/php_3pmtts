<?php 
$price=4500;
$today=mktime(0,0,0,date("m"),date("d"),date("Y"));
$tommarow=mktime(0,0,0,date("m"),date("d")+3,date("Y"));
$diff=($tommarow-$today)/86400;
echo "Total stay day is :".$diff."<br>";
echo "Total bill is :".$price*$diff;


?>