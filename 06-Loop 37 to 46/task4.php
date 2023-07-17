<?php

$start = 10;
$end = 0;
$stop = 3;
$temp = $start;


for(;$start>=$stop;){
    if($start == $temp){
        echo $start."<br>";
    }else{
        echo $end.$start."<br>";
    }
    $start--;
}
/* Needed Output
10
09
08
07
06
05
04
03*/