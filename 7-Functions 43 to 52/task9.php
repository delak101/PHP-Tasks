<?php

// Write Function Content Here

//first function " anonymous function "
$greet = function($someone) {
    return "Hello $someone";
};

//second function " Arrow Function Syntax "
$greet = fn($someone) => "Hello $someone";

// Needed Output
echo $greet("Osama"); // Greetings