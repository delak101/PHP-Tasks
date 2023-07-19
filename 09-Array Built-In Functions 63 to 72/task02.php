<?php

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_change_key_case(array_combine($codes, $means), CASE_LOWER));
echo '</pre>';

// Output
//  Array
//  (
//    [h] => HTML
//    [c] => CSS
//    [j] => JavaScript
//  )