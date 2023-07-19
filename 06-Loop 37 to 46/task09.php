<?php

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i=0;$i<count($names);$i++){
    if($names[$i]== $names[$nums[$help_num]]){
        echo $names[$nums[$help_num]]."<br>";
        echo $names[$nums[$help_num] + $nums[$help_num]]."<br>";
    }
} //loop until you get to the right order
/* Output
"Sayed"
"Osama"*/