<?php

date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";
$d=date_create($date);

$now= date_create("now");

$diff = date_diff($d, $now); // difference between dates

echo "<pre>";
print_r($diff);
echo "</pre>";

echo " From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days . " Days<br>";
echo " From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y . " Years<br>";



// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"
