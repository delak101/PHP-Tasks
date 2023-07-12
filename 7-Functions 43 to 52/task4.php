<?php

// Write Function Content Here
function multiply():int{
    $result = 1;
    foreach(func_get_args() as $arg){
        if(gettype($arg) == "string"){
            continue;
        } 
       $result *= (int)$arg;
    }
    echo "<br>";
    return $result;
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000