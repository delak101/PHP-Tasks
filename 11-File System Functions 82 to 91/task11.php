<?php

echo round((disk_total_space('C:') + disk_total_space('D:') + disk_total_space('E:') + disk_total_space('F:')) / 1024 / 1024 / 1024 / 1024, 2) . ' Terabyte' . "<br>";

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"


//-------------------------------------

echo "Size In Megabyte Is " . round(filesize("E:\Shazam.mp4") / 1024 / 1024) . "<br>";
echo "Size In Kilobyte Is " . round(filesize("E:\Shazam.mp4") / 1024) . "<br>";

// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"

//-------------------------------------

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

//-------------------------------------

function change_permissions($str){
    if(is_dir($str)){
        echo "This Is Directory And Only Files Allowed" . "<br>";
    } elseif(pathinfo($str)["extension"] != "txt") {
        echo "File Extension Is Not Txt" . "<br>";
    } else {
        clearstatcache();
        chmod($str, 0700);
        echo "Permissions Changed" . "<br>";
    }
}

// Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed

//------------------------------------------

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



//---------------------------------------------

$handle = fopen("elzero.txt", "r");

// method 1
echo fgets($handle, 20) . " " . fgets($handle, 7) . "<br>";

rewind($handle);

// method 2
echo fread($handle, 24) . "<br>";

// method 3
echo file_get_contents("elzero.txt");

// method 4


// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"

//-------------------------------
// elzero.txt Content
// Hello Osamaa Web
// School
$handle = fopen("elzero.txt", "r+");

fseek($handle, 6);
fwrite($handle, "Elzero", 7);

// elzero.txt New Content
// Hello Elzero Web
// School