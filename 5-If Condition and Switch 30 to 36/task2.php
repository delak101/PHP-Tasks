<?php

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

//echo "A Is Not Larger Than B Or C";
if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo '<br>';

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

//echo "A Is Larger Than B";
if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo '<br>';

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

//echo "A Is Larger Than c";
if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo '<br>';