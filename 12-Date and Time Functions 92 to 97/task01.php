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