<?php

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