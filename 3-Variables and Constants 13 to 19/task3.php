<?php

$a = 200;
$b = $a;
$a = 100;

echo $b; // 200  here b = the value that was in a "200" 

echo "<br>";

$b = &$a;     
echo $b; //100   here b = the value that is in the store a is pointing to