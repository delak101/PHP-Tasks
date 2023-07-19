<?php

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
