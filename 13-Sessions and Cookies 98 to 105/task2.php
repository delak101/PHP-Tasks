<?php

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["site"])) {
    echo "your Color Is " . $_COOKIE["site"]["color"] . " And Your Font Is " . $_COOKIE["site"]["font"] . "<br>";
}

// Array
// (
//   [site] => Array
//     (
//       [color] => blue
//       [font] => Swat
//       [layout] => boxed
//     )
// )
// "Your Color Is blue And Your Font Is Swat"