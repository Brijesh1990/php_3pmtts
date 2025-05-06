<?php 
// types of date function 
// a) date()
// b) mktime() 
// c) strtotime()

// date function

// echo "The date of today is :".date("d/m/Y")."<br>";
// echo "The date of today is :".date("d.m.Y")."<br>";
// echo "The date of today is :".date("d-m-Y")."<br>";


// mktime : current date and future | past date and time of systems 
// $day=mktime(0,0,0,date("m"),date("d"),date("Y"));
// echo "today the date is :".date("d/m/Y",$day);

// $day=mktime(0,0,0,date("m"),date("d")-7,date("Y"));
// echo "Before 1 week a day is  :".date("d/m/Y",$day);

// $day=mktime(0,0,0,date("m"),date("d")+7,date("Y"));
// echo "After  1 week a day is  :".date("d/m/Y",$day);

// strtotime() is used to convert any string into date formate ...

// echo "after 7 day the date is :".date("d/m/Y",strtotime("+7 day"));

// echo "Today the date is :".strftime("%d-%m-%Y");
echo "Today the date is :".strftime("%d-%m-%Y");


?>