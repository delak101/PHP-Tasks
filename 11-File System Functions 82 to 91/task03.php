<?php

mkdir("Programming/PHP", 0711, true);

if(file_exists("Programming/PHP")){
        rmdir("Programming/PHP"); // Remove Directory with all files and subdirectories recursively using the function `
        rmdir("Programming"); // Remove Directory with all files and subdirectories recursively using the function `
        echo "Directory Programming/PHP Removed" . "<br>";
        echo "Directory Programming Removed" . "<br>";
}

// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"