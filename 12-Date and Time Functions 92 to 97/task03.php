<?php

$date = "1990-10-01";

$old_date = strtotime("1990-10-01");

date_default_timezone_set("Africa/Cairo");

$days = round((time() - $old_date) / 60 / 60 / 24 , 2);
$years = round((time() - $old_date) / 60 / 60 / 24 / 365 , 2);

echo "From Epoch Time Till 1990-10-01 Is Approximately " . $days . " Days" . "<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately " . $years . " Years" . "<br>";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
