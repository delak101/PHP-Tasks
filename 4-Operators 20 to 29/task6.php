<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d =  $a . " " . $b . " " . $c;
echo $d;
echo '<br>';

// Method Two
$d = "{$a} {$b} {$c}";
echo $d;
echo '<br>';

// Method Three
$d = "$a $b $c";
echo $d;
echo '<br>';

// Method Four
$d = $a ." ";
$d .= $b ." ";
$d .= $c; 
echo $d;
echo '<br>';

// Elzero Web Schoolٍ
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000