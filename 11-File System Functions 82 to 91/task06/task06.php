<?php

$handle = fopen("elzero.txt", "r");

// method 1
echo fgets($handle, 20) . " " . fgets($handle, 7) . "<br>";

rewind($handle);

// method 2
echo fread($handle, 24) . "<br>";

// method 3
echo file_get_contents("elzero.txt");

// method 4


// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"