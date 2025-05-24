<?php 
//what is multidimentional array ? 

//array within another aarray there we used multidimentional array 

// $multi_array = array(
//     array(1,2,3),
//     array(4,5,6),
//     array(7,8,9)
// );

// //access the first element of multidimensional array

// echo $multi_array[0][0]; // Output: 1

$arr=array("technical"=>array("web","mobile","desktop"),"sports"=>array("cricket","football","hockey"));
print_r($arr);
print_r($arr["technical"][0]);
print_r($arr["sports"][2]);


?>