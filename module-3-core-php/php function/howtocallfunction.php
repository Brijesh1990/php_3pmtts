<?php 
// there are two way to call any function 

// a) call by values b) call by reference values

// a) call by value

// function display($fnm,$lnm)
// {
//     return $fnm."&nbsp".$lnm;
// }
// echo "The name of users is :".display("Brijesh","Pandey");


// call by reference

function display(&$nm) //&$nm is a call by reference 
{
    echo "Name is Brijesh";
}
$lnm="Pandey";
display($nm);
echo $lnm;


?>