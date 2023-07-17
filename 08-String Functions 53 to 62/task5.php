<?php

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four)."<br>";// 1
echo substr_count($str, strtolower($o), 2*$four, 2*$four)."<br>";// 2