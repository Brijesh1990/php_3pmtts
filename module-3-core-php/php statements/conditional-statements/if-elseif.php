<?php
/* if : if is executed when condition is true elseif is executed to check multiple true conditions if is  false else is executed 
syntax :  if(condition)
{
statements;  
} 
elseif(condition)
{
statements;
}
elseif(condition)
{
statements;
}
else 
{
statements;
}


*/

$a=30;
$b=30;
if($a>$b)
{
echo "a is greater than b";
}

elseif($b>$a) 
{
    echo "b is greater than a";
}
else 
{
    echo "a and b both are equal";
}

?>