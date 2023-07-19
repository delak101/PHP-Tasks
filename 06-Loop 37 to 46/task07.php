<?php

$mix = [1, 2, "A", "B", "C", 3, 4];
$num_of_items = count($mix);
$Letters=0;
$Numbers=0;

for($i=0;$i<$num_of_items;$i++){
    if(is_numeric($mix[$i])){
        echo $mix[$i]."<br>";
        $Numbers++;
    }else{
        $Letters++;
    }
}
echo "$Numbers Numbers Printed<br>";
echo "$Letters Letters Ignored<br>";

/* Output
1
2
3
4
"4 Numbers Printed"
"3 Letters Ignored"*/