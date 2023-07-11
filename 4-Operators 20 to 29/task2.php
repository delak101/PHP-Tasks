<?php

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