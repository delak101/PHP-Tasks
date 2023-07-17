<?php

$nums = [5, 10, 20, 5, 30, 40];


echo array_sum(array_filter($nums, function ($numbers){return $numbers != 5;}))."<br>";


// Output
// 100