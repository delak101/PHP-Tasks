<?php

/**
 *  built in function implementation
 *  Function Accept 1 Parameter
 *  $str = The String To Count [Mandatory]
 */

function String_Length(string $str) : int{
   $counter = 0;
   while(!empty($str[$counter])) $counter++;
   return $counter;
}

#echo String_Length("") . "<br>";
#echo String_Length("Delak") . "<br>";
#echo String_Length("Heba") . "<br>";
#cho String_Length("El Zero") . "<br>";