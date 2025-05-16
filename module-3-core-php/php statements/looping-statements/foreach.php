<?php 
// foreach : foreach is  a loop 
// foreach is used to convert any array as value

$arr=array("aditya","kaushik","sanket","krish","vishjit","harsh","brijesh");
// print_r($arr);

// foreach(array as values)
// {
//     statements;
// }


foreach($arr as $value)
{
    echo "The name of users is :".$value."<br>";
}


?>