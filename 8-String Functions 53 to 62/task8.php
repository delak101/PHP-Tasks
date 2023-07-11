<?php

// 1
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;
echo $str; // Elzero

echo "<br>";
// 2

$str = "Orezle";


echo ucfirst(strrev(lcfirst($str)));
// Elzero


echo "<br>";
// 3

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

echo chunk_split(str_repeat(strtolower($str), $num), $num, $char); //to make all lower case

// aaa_aaa_aaa_


echo "<br>";
// 4

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, "<div>");
// <b>Elzero</b>

echo "<br>";
// 5

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four)."<br>";// 1
echo substr_count($str, strtolower($o), 2*$four, 2*$four)."<br>";// 2


echo "<br>";
// 6

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);

// Output
//"Elzero"

echo "<br>";
// 7

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo ucfirst(strtolower(substr_replace(implode($chars), "", 1, 2)));

// Output
//"Elzero"