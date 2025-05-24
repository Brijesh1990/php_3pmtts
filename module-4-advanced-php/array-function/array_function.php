<?php 
// array_count_value() 
// count each values of array and return the count of each value. 

// $arr = array('a', 'b', 'c', 'a', 'b', 'c');
// $counts = array_count_values($arr);
// print_r($counts);

// $arr=array("php","react","php","java","python","php","ruby");
// $counts = array_count_values($arr);
// // print the result
// print_r($counts);


// array_merge() : Merge one or more arrays into a single array. 
// $arr1 = array("a" => "red", "b" => "green");
// $arr2 = array("a"=>"orange","c" => "blue", "d" => "yellow");
// $result = array_merge($arr1, $arr2);
// print_r($result);


// array_combine() : Combine two arrays into one array by using the elements from the first array as keys and the elements from the second array as the values. 

// $keys = array("a", "b", "c");
// $values = array("red", "green", "blue");
// $result = array_combine($keys, $values);
// // print the result
// print_r($result);

// array_diff() : Returns an array containing all the entries of the first array that are not present in any of the other arrays.

// $array1 = array("a" => "green", "b" => "red", "c" => "blue");
// $array2 = array("a" => "red", "b" => "yellow", "d" => "blue");
// $result = array_diff($array1, $array2); 
// // print the result
// print_r($result);

// array_diff_assoc() : Returns an array containing all the entries of the first array that have corresponding entries in the second array.

// $array1 = array("a" => "green", "b" => "red", "c" => "blue");
// $array2 = array("a" => "red", "b" => "yellow", "c" => "blue");
// $result = array_diff_assoc($array1, $array2);
// // print the result
// print_r($result);

//asort() : Sort an array in ascending order.

// $array = array(6, 3, 9, 2, 5, 1, 8, 4, 7);
// asort($array);
// // print_r($array);
// //print_r($array);
// foreach($array as $value)
// {
//     echo $value." ";
// }



// $array = array(6, 3, 9, 2, 5, 1, 8, 4, 7);
// arsort($array);
// // print_r($array);
// //print_r($array);
// foreach($array as $value)
// {
//     echo $value." ";
// }


// //krsort() : Sort an array in descending order.

// $array = array(6, 3, 9, 2, 5, 1, 8, 4, 7);
// krsort($array);
// // print_r($array);
// //print_r($array);
// foreach($array as $value)
// {
//     echo $value." ";
// }


// //krsort() : Sort an array in asecinding order.
// $array = array(6, 3, 9, 2, 5, 1, 8, 4, 7);
// ksort($array);
// // print_r($array);
// //print_r($array);
// foreach($array as $value)
// {
//     echo $value." ";
// }

//array_reverse();
// $array = array(6, 3, 9, 2, 5, 1, 8, 4, 7);
// $reversed_array = array_reverse($array);
// print_r($reversed_array);

// $arr=array("rajesh","ramesh","kumar","harsh","sanket");
// $result=array_reverse($arr);
// print_r($result);

// //array_rand() : Pick one or more random keys from an array.

// $array = array("a" => "green", "b" => "red", "c" => "blue");

// $keys = array_rand($array, 2);

// foreach($keys as $key) {
//     echo "Key: $key => Value: ". $array[$key]. "\n";
// }

// $num=rand(00000,11111);
// echo "Random Number: ".$num;


// $num=rand(1111,9999);
// echo "Random Number: ".$num;


// //array_shift() : Remove the first element from an array and return it.

// $array = array("red", "green", "blue", "yellow");
// $color = array_shift($array);
// echo "Shifted color: ". $color. "\n";
// print_r($array);

// $arr=array("php","react","java","python","ruby");
// print_r($arr);

// array_keys() : Get all the keys of an array.

// $array = array("a" => "red", "b" => "green", "c" => "blue");
// $keys = array_keys($array);
// print_r($keys);

//array_values(): get all values of array 


// $array = array("a" => "red", "b" => "green", "c" => "blue");
// print_r(array_values($array));

//array_pop() : delete last element from array 

// $arr=array("rajesh","ramesh","kumar","harsh","sanket");
// $res=array_pop($arr);
// print_r(($res));


//print_r($arr);

// array_push() : push new element in array  

// $arr=array("rajesh","ramesh","kumar","harsh","sanket");
// $res=array_push($arr,"brijesh");
// print_r(($res));
// print_r($arr);



// array_filter() 
// array_chunk()
// array_splice()
// array_map()
// array_replace()
// array_sum()
// array_search()
// array_fill()


// $arr=array(5454,6564,45,5454,5454,545,455,454,54,545,45,454);
// print_r(array_sum($arr));

//next()  : Output the value of the current and the next element in the array:

$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>";
echo next($people);





?> 



