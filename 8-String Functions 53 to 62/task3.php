<?php

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

echo chunk_split(str_repeat(strtolower($str), $num), $num, $char); //to make all lower case

// aaa_aaa_aaa_