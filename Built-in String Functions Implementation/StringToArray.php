<?php
require "StringLength.php";
/**
 *  built in function implementation
 *  Function Accept 1 Parameter
 *  $str = The String To Turn To Array [Mandatory]
 */

function StringToArray(string $str){
    $array_ed = []; 
    for($i = 0; $i < String_Length($str); $i++) $array_ed[$i] = $str[$i];
    return $array_ed;
}
echo "<pre>";
print_r(StringToArray("Delak")) . "<br>";
print_r(StringToArray("Heba")) . "<br>";
print_r(StringToArray("El Zero")) . "<br>";
echo "</pre>";