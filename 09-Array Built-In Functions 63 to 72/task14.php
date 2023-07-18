<?php

$nums = [10, 100, -20, 50, 30];

function String_Length($str) : int{
    $counter = 0;
    while(!empty($str[$counter])) $counter++;
    return $counter;
  }

$nums = [10, 100, -20, 50, 30];
$max = $nums[0];
for($i = 0; $i < String_Length($arr); $i++){
  if($max > $nums[$i]){
    $max = $nums[$i];
  }
}
echo $max . "<br>";

// Output
//-20