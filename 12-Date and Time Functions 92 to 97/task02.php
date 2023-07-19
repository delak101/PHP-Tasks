<?php

$date = "2005-10-02";
$d = date_create("$date");

date_default_timezone_set("Africa/Cairo"); //setting timezone
echo date_default_timezone_get() . "<br>"; // "Africa/Cairo"

date_modify($d, "+15 hours, +15 minutes, +15 seconds"); // adding 15 hours & minutes & seconds
echo date_format($d, "Y, F, l 'dS' H:i:s") . "<br>"; // "2005, October, Sunday '02nd' 15:15:15"

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"
