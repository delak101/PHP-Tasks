<?php

$chars = ["A", "B", "C"];

#method 1
/*
$chars[] = "D";
print_r($chars);
*/

#method 2
/*
$D = "D";
array_push($chars, $D);
echo "<pre>";
print_r($chars);
echo "</pre>";
*/

#method 3
/*
$new_letter=["D"];
print_r(array_merge($chars, $new_letter));
*/

#method 4
echo'<pre>';
print_r(array_pad($chars,4,"D"));
echo'</pre>'; 

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )