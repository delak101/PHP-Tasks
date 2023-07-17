<?php

$nums = [10, 20, 30];

echo array_reduce($nums, function ($num1, $num2){return $num1+$num2;})."<br>";
echo array_sum($nums)."<br>";
// Output
// 60
// 60