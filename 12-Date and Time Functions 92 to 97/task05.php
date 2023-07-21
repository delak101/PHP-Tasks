<?php

//method 1
echo time() . "<br>";

//method 2
$date = date_create();
echo date_timestamp_get($date) . "<br>";

//method 3
print_r(getdate()[0]) . "<br>";
