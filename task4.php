<?php
echo "<h4>-----TASK 1-----</h4>";

// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0

echo "<h4>-----TASK 2-----</h4>";

$a = "10";

// Needed Ouput
echo (int)$a;
//10
echo '<br>';
echo gettype((int)$a);
//"integer"
echo '<br>';

echo +$a;
//10
echo '<br>';
echo gettype(+$a);
//"integer"
echo '<br>';

echo $a;
//10
echo '<br>';
echo gettype($a + 0);
//"integer"
echo '<br>';

echo intval($a);
//10
echo '<br>';
echo gettype(intval($a));
//integer

echo "<h4>-----TASK 3-----</h4>";


$a = 10;
$b = 20;

echo ($a - $b)/10;
// Needed Output
//-1

echo "<h4>-----TASK 4-----</h4>";


$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); echo '<br>';// True
var_dump($c > $a); echo '<br>';// True
var_dump($a <= $b); echo '<br>';// True
var_dump($a != $b); echo '<br>';// True
var_dump($a <> $c); echo '<br>';// True
var_dump($a != $c); echo '<br>';// True
var_dump(gettype($a) == gettype($b)); echo '<br>';// True
var_dump(gettype($a) === gettype($b)); echo '<br>';// True
var_dump(gettype((float) $a) !== gettype($b)); echo '<br>';// True



echo "<h4>-----TASK 5-----</h4>";


$points = 10;

// Write Your Code Here
$points++;
$points++;
$points++;

echo $points; // 13

echo '<br>';

// Write Your Code Here
$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;

echo "<h4>-----TASK 6-----</h4>";


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


echo "<h4>-----TASK 7-----</h4>";


// Code 1
$a = @$z or die("Var Not Found");

// Code 2
$f = @file("Not_A_File") or die("File Not Found");

// Code 3
(@include("Not_A_File")) or die("File Not Found");

?>