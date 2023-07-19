<?php

// method 1
echo basename(__FILE__) . "<br>";

// method 2
echo pathinfo(__FILE__)['basename'] . '<br>';

// method 3
echo pathinfo(__FILE__, PATHINFO_BASENAME) . '<br>';

// method 4
// print_r(end(explode("\\",__FILE__))) .  '<br>';

// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"