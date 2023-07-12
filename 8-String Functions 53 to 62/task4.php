<?php

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, "<div>");
// <b>Elzero</b>