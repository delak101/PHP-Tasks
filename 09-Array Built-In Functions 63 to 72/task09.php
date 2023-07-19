<?php

$nums = [1, 2, 3, 4, 5, 6];

echo'<pre>';
print_r(array_slice($nums, -5, -2));
echo'</pre>';

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )