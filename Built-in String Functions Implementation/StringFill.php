<?php
require "StringLength.php";
/**
 *  built in function implementation
 *  Function Accept 3 Parameters
 *  $str = The String To Fill [Mandatory]
 *  $width = The Required Width Of The String [Mandatory]
 *  $fill_with = The Character To Use For Filling [Mandatory]
 */ 

function String_Fill(string $str, int $width, $fill_with ) {
    $len = String_Length($str);
    $filled_str = $str;
    while($len < $width){
        $filled_str .= $fill_with;
        $len++;
    }
    return $filled_str;
    
}

echo String_Fill("Delak", 11, 0) . "<br>";
echo String_Fill("Heba", 11, 0) . "<br>";