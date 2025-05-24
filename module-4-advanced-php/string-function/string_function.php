<?php
// string provides a inbuild function
// list of string function in php

// strtolower() function converts all characters in a string to lowercase

$str = "Hello World";
echo strtolower($str)."<br>"; // Outputs: hello world

// strtoupper() function converts all characters in a string to uppercase

$str = "Hello World";
echo strtoupper($str)."<br>"; // Outputs: HELLO WORLD

// ucfirst() function converts the first character of a string to uppercase

$str = "hello world";
echo ucfirst($str)."<br>"; // Outputs: Hello world

// ucwords() function converts the first character of each word in a string to uppercase

$str = "hello world";
echo ucwords($str)."<br>"; // Outputs: Hello World


// strlen() function returns the length of a string

$str = "Hello World";
echo strlen($str)."<br>"; // Outputs: 11

// strpos() function searches for the first occurrence of a substring in a string

$str = "Hello World";
echo strpos($str, "World")."<br>"; // Outputs: 6

$str = "Hello World";
echo strpos($str, "Hello")."<br>"; // Outputs: 0

// substr() function returns a portion of a string

$str = "Hello World";
echo substr($str, 6)."<br>"; // Outputs: World

$str = "Hello World";
echo substr($str, 0, 5)."<br>"; // Outputs: Hello

$str="Tops technology";
$res=str_replace("Tops","Infosys", $str);
echo $res."<br>"; // Outputs: Infosys technology

// explode() function splits a string into an array

$str="Hello Brijesh";
$res=explode(" ",$str);
print_r($res); // Outputs: Array ( [0] => Hello [1] => Brijesh )

// implode() function merges elements of an array into a string

$arr=array("hello","i","am","brijesh");
$res=implode(" ",$arr);
echo $res."<br>"; // Outputs: Hello i am brijesh

// str_repeat() function repeats a string a specified number of times

$str="brijesh"."<br>";
echo str_repeat($str,4)."<br>"; // Outputs: HelloHelloHello

// str_shuffle() function shuffles the characters in a string

$str="Hello World";
echo str_shuffle($str)."<br>"; // Outputs: olH Wlrld

// str_word_count() function counts the number of words in a string

$str="Hello World i am Brijesh";
echo str_word_count($str)."<br>"; // Outputs: 2

// trim() function removes whitespace (or other characters) from the beginning and end of a string

// $str="   Hello World   ";
// echo trim($str)."<br>"; // Outputs: Hello World


$str="hello i am brijesh";

// ltrim() function removes whitespace (or other characters) from the beginning of a string

// echo ltrim($str)."<br>"; // Outputs: hello i am brijesh
// echo rtrim($str)."<br>"; // Outputs: hello i am brijesh

// echo trim($str,"hello")."<br>"; // Outputs: i am brijesh

// echo rtrim($str,"brijesh")."<br>"; // Outputs: hello i am

// explode() function splits a string into an array

$str="Hello Brijesh";
$res=explode(" ",$str);
print_r($res); // Outputs: Array ( [0] => Hello [1] => Brijesh )

// implode() function merges elements of an array into a string

$arr=array("hello","i","am","brijesh");
$res=implode(" ",$arr);
echo $res."<br>"; // Outputs: Hello i am brijesh

// str_repeat() function repeats a string a specified number of times

$str="brijesh"."<br>";
echo str_repeat($str,4)."<br>"; // Outputs: HelloHelloHello

// str_shuffle() function shuffles the characters in a string

$str="Hello World";
echo str_shuffle($str)."<br>"; // Outputs: olH Wlrld

// str_word_count() function counts the number of words in a string


$str="Hello World i am Brijesh";

echo str_word_count($str)."<br>"; // Outputs: 2

// trim() function removes whitespace (or other characters) from the beginning and end of a string

$str="   Hello World   ";
echo trim($str)."<br>"; // Outputs: Hello World

// ltrim() function removes whitespace (or other characters) from the beginning of a string

echo ltrim($str)."<br>"; // Outputs: Hello World
echo rtrim($str)."<br>"; // Outputs: Hello World

echo trim($str,"hello")."<br>"; // Outputs: i am Brijesh
echo rtrim($str,"brijesh")."<br>"; // Outputs: hello i am

// stristr :

// $str="Hello World";
// echo stristr($str,"lo")."<br>"; // Outputs: lo World


// echo strstr("Hello World","LO")."<br>"; // Outputs: lo World

// echo date("d/m/Y",strtotime("2 days"))."<br>"; // Outputs: 29/02/2022


// echo date("d/m/Y",strtotime("2 month"))."<br>"; // Outputs: 29/02/2022


// echo date("d/m/Y",strtotime("2 years"))."<br>"; // Outputs: 29/02/2022

// echo strftime("%d,%m,%Y")."<br>"; // Outputs: 29,02,2022


// echo strftime("%d-%m-%Y")."<br>"; // Outputs: 29,02,2022

// echo strftime("%d.%m.%Y")."<br>"; // Outputs: 29,02,2022

// echo strftime("%d %m  %Y")."<br>"; // Outputs: Saturday 29 February 2022
?>