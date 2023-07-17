<?php

function check_status($a, $b, $c) {
    // Function Code Here
    if (is_string($a)){
        $name = $a;
        if(is_integer($b) && is_bool($c)){
            $age = $b;
            $available = $c;
            echo "Hello $name, Your Age Is $age, You Are $available For Hire"."<br>";
        } else {
            $age = $c;
            $available = $b;
            echo "Hello $name, Your Age Is $age, You Are $available For Hire"."<br>";
        }
    } elseif (is_string($b)){
        $name = $b;
        if(is_integer($a) && is_bool($c)){
            $age = $a;
            $available = $c;
            echo "Hello $name, Your Age Is $age, You Are $available For Hire"."<br>";
        } else {
            $age = $c;
            $available = $b;
            echo "Hello $name, Your Age Is $age, You Are $available For Hire"."<br>";
        }
    } elseif (is_string($c)){
        $name = $c;
        if(is_integer($a) && is_bool($b)){
            $age = $a;
            $available = $b;
            echo "Hello $name, Your Age Is $age, You Are $available For Hire"."<br>";
        } else {
            $age = $b;
            $available = $a;
            echo "Hello $name, Your Age Is $age, You Are $available For Hire"."<br>";
        }
    } 
}
  
// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"