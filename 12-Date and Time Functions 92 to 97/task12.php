<?php

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";

$date = date_create();
echo date_format($date, "D, d M y - h:i:s A") . "<br>";

echo date_format($date, "d, l F Y - h:i:s A") . "<br>";

// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"

//--------------------------------------------------------

$date = "2005-10-02";
$d = date_create("$date");

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";
date_modify($d, "+15 hours, +15 minutes, +15 seconds");
echo date_format($d, "Y, F, l 'dS' H:i:s") . "<br>";

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"

//--------------------------------------------------------

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


//--------------------------------------------------------

date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$d=date_create($date);
$now= date_create("now");
$diff = date_diff($d, $now);
echo "<pre>";
print_r($diff);
echo "</pre>";
echo " From Epoch Time Till 1990-10-01 Is Approximately " . $diff->days . " Days<br>";
echo " From Epoch Time Till 1990-10-01 Is Approximately " . $diff->y . " Years<br>";



// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"

//-----------------------------------------------

echo time() . "<br>";

print_r(getdate()[0]) . "<br>";
