<?php

$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];

echo '<pre>';
print_r(array_reverse(array_change_key_case(array_flip($friends), CASE_LOWER)));
echo '</pre>';

// Output
//  Array
//  (
//    [as] => Ahmed Samy
//    [mg] => Mahmoud Gamal
//    [om] => Osama Mohamed
//    [ag] => Ahmed Gamal
//  )