<?php
/**
 *  built in function implementation
 *  Function Accept 2 Parameters
 *  $str = The String To Trim [Mandatory]
 *  $val = The Value To Be Trimmed [Optional] Default = " "
 *  --- Accept Any Value ["a", 2, $, ...]
 */

function Left_Trim(string $str, mixed $val = " ") : string {
    $trimmed_str = "";
    $stop = false;
    for($i = 0; $i<strlen($str); $i++){
        if($str[$i]===$val && $stop === false){
            continue;
        } else {
            $stop = true;
        }
        
        $trimmed_str .= $str[$i];
    }
    return $trimmed_str;
}

echo Left_Trim(".......D.e.l.a.k", ".") . "<br>";
echo Left_Trim("&&&Delak & Heba", "&") . "<br>";
