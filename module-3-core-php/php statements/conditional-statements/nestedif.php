<?php
/* nested if : if within another if there we used nested if  
syntax : if(condition)
{
if(condition)
{
statements;  
}
} 
else 
{
statements;
}


*/

$a=20;
$b=12;
if($a>$b)
{
if($a!=0 && $b!=0)
{
echo "a is greater than b and both are positive numbers";
}
}

else 
{
echo "a is less than b";
}

?>