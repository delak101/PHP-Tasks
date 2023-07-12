<?php

$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach($nums as $key => $num){
    echo $nums[$key] . " + " . $nums[$help_num-$key] . " = " . $nums[$key]+$nums[$help_num-$key] . "<br>";
}
/* Output
"2 + 10 = 12"
"4 + 6 = 10"
"5 + 5 = 10"
"6 + 4 = 10"
"10 + 2 = 12"
*/
