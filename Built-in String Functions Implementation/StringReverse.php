<?php
require "StringLength.php";
/**
 *  built in function implementation
 *  Function Accept 1 Parameter
 *  $str = The String To Reverse [Mandatory]
 */

function String_Reverse(string $str){
    $reversed = "";
    $len = String_Length($str);
    for($i = 0; $i < String_Length($str); $i++):
        $reversed[$len]=$str[$i];
        $len--;
    endfor;
    return $reversed;
}

echo String_Reverse("kaleD") . "<br>";
echo String_Reverse("abeH") . "<br>";
echo String_Reverse("orez lE") . "<br>";