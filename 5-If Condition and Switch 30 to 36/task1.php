<?php

$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
if ($b > $a && $a === $c && $a + $c === $b) {
    echo "Yes";
}