<?php

// task 3

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2, 1) . "<br>";
echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>";

// task 4
$filter_name = [];
$filter_id = [];

for ($i = 0; $i < count(filter_list()); $i++){
    array_push($filter_name, filter_list()[$i]);
    array_push($filter_id, filter_id(filter_list()[$i]));
}

echo "<pre>";
print_r(array_combine($filter_id, $filter_name));
echo "</pre>";
// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )


// task 5
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

if(filter_var($url1, FILTER_VALIDATE_URL)){
    echo "A Valid URL" . '<br>';
} else {
    echo "Not A Valid URL" . '<br>';
}

if(filter_var($url2, FILTER_VALIDATE_URL)){
    echo "A Valid URL" . '<br>';
} else {
    echo "Not A Valid URL" . '<br>';
}


if(filter_var($url3, FILTER_VALIDATE_URL)){
    echo "A Valid URL" . '<br>';
} else {
    echo "Not A Valid URL" . '<br>';
}

if(filter_var($url4, FILTER_VALIDATE_URL)){
    echo "A Valid URL" . '<br>';
} else {
    echo "Not A Valid URL" . '<br>';
}


// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"

//task 6

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL) . '<br>';
echo filter_var($url2, FILTER_SANITIZE_URL) . '<br>';
echo filter_var($url3, FILTER_SANITIZE_URL) . '<br>';
echo filter_var($url4, FILTER_SANITIZE_URL) . '<br>';

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org
