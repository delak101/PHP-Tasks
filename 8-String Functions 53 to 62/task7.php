<?php

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo ucfirst(strtolower(substr_replace(implode($chars), "", 1, 2)));

// Output
//"Elzero"