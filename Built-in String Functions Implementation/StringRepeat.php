<?php
/**
 *  built in function implementation
 *  Function Accept 3 Parameters
 *  $str = The String To Repeat [Mandatory]
 *  $repeats = Rpeats Count [Optional] Default = 2
 *  $space = Space Between Repeated String [Optional] Default = ""
 *  -- Accept Any True Value ["Space", "S", "s", 1, true]
 */ 

function String_Repeat(string $str, int $repeats = 2, bool $space = false) {
    $result = " ";
    $separator = $space ? " " : "";
    for ($i = 0; $i < $repeats; $i++) $result .= $str . $separator;
    return $result;
}

echo String_Repeat("Delak") . "<br>";
echo String_Repeat("Heba", 2) . "<br>";
echo String_Repeat("Delak", 3) . "<br>";
echo String_Repeat("Heba", 3, "S") . "<br>";
echo String_Repeat("Delak", 3, "Space") . "<br>";
echo String_Repeat("Heba", 3, 1) . "<br>";