<?php

// elzero.txt Content
// Hello Osamaa Web
// School
$handle = fopen("elzero.txt", "r+");

fseek($handle, 6);
fwrite($handle, "Elzero", 7);

// elzero.txt New Content
// Hello Elzero Web
// School