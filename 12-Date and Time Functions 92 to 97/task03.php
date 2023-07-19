<?php

$date = "1990-10-01";

$old_date = strtotime("1990-10-01");

echo round((time() - $old_date) / 60 / 60 / 24 , 2);

date_default_timezone_set("Africa/Cairo");

//$current_date = date_create();
//$current_date = date_format($current_date, "Y-m-d");

//echo $old_date . "<br>";
//echo $current_date . "<br>";


//$years_diff = date("Y", strtotime("$current_date")) - date("Y", strtotime("$old_date"));
//$days_diff = date("d", strtotime("$current_date")) - date("d", strtotime("$old_date"));

//echo "From Epoch Time Till 1990-10-01 Is Approximately " . $days_diff . " Days" . "<br>";
//echo "From Epoch Time Till 1990-10-01 Is Approximately " . $years_diff . " Years" . "<br>";
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"