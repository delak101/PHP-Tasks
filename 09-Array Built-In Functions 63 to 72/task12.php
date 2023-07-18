<?php

function String_Length($str) : int{
    $counter = 0;
    while(!empty($str[$counter])) $counter++;
    return $counter;
  }

$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
for($i = 0; $i <= String_Length($arr); $i++) $sum+=$nums[$i];
echo $sum . "<br>";
// Output
//100