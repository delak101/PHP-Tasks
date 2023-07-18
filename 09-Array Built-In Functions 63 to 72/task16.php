<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$mix=array_slice($mix ,3 ,7 , false);
$z=[];
for ($i=0 ; $i<count($mix); $i++)
{
    if ($mix[$i]%2==0)
    {
        continue;
    }
    else
    array_push($z,$mix[$i]);
}
echo'<pre>';
print_r($z);
echo'</pre>';
// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )