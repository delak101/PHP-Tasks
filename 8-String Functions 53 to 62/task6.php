<?php 

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