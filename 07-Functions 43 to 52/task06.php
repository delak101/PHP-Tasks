<?php

// Write Function Content Here
function calculate($num1, $num2, $op = "a"){
    switch ($op) {
        case "s":
        case "subtract":
            return $num1 - $num2."<br>";
            break;
        case "m":
        case "multiply":
            return $num1 * $num2."<br>";
            break;
        case "a":
            return $num1 + $num2."<br>";
            break;
        default:
            echo "Invalid Operation <br>";
        }
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200