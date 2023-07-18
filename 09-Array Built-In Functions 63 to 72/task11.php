<?php

function String_Length($str) : int{
  $counter = 0;
  while(!empty($str[$counter])) $counter++;
  return $counter;
}


$arr = ["A", "B", "C", "D", "E"];

echo String_Length($arr) . "<br>";
// Output
// 5