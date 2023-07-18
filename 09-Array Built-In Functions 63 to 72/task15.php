<?php

$chars = ["o", "r", "e", "z", "l", "E"];
$chars = array_reverse($chars);

echo'<pre>';
print_r(implode("",$chars));
echo '</pre>';