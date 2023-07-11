<?php

// Code 1
$a = @$z or die("Var Not Found");

// Code 2
$f = @file("Not_A_File") or die("File Not Found");

// Code 3
(@include("Not_A_File")) or die("File Not Found");