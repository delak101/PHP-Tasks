<?php
//task1
// Write Function Content Here
function greeting($name,$gender=NULL){
    if($gender=="Male"){
        return "Hello Mr.$name"."<br>";
    } elseif($gender=="Female") {
        return "Hello Miss.$name"."<br>";
    } else {
        return "Hello $name"."<br>";
    }
};

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


echo "<br>";

//task2
// Write Function Content Here
function get_arguments(...$args){
    foreach ($args as $arg) {
        echo "$arg ";
    }
    echo "<br>";
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP


echo "<br>";

//task3
// Write Function Content Here
function sum_all(...$nums){
    $sum = 0;
    foreach($nums as $num){
        if($num == 5){
            continue;
        } elseif($num == 10) {
            $num += 10;
        }
        $sum += $num;
    }
    echo "<br>";
    return $sum;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40


echo "<br>";

//task4
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


echo "<br>";
//task5
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


echo "<br>";

//task6
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


/*
//task7
function calculate(int $num_one, int $num_two) :float {
  return $num_one + $num_two;
}

echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double
*/


//task7
$message = 'Hello';

echo $message;

$$message/*$Hello*/ = &$message;
/*$$message == $Hello*/
// Write Your Code Here
$message = function ($message) {
    $$message/*$Hello*/ = $message/*Hello*/;
    return " $message"/*Hello*/;
};
echo $Hello('Osama'); // Hello Osama

echo"<br>";

//task9
// Write Function Content Here
$greet = function($someone) {
    return "Hello $someone";
};
$greet = fn($someone) => "Hello $someone";
// Needed Output
echo $greet("Osama"); // Greetings

