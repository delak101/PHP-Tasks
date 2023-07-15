<?php
/**
 *  built in function implementation
 *  Function Accept 1 Parameter
 *  $str = The String To Check If It's Lower [Mandatory]
 */

function Is_Lower(string $str):string
{
     $is_lower= "All the letters Lowercase";
    for ($i=0 ; $i<strlen($str); $i++)
    {
        if (ord($str[$i])>64 && ord($str[$i])<91 )
        {
            $is_lower="The word has Capital letter/s";
            break;
        }
    }
    return $is_lower;
}
echo Is_Lower("Delak") . "<br>";
echo Is_Lower("delak") . "<br>";