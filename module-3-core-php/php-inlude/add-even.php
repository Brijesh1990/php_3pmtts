<?php
if(isset($_POST["chk"]))
{
    $number=$_POST["number"];
    if($number%2==0)
    {
        echo "The number is even";
    }
    else 
    {
        echo "The number is odd";
    }
}

?>