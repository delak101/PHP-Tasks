<?php

$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
  echo "The Age Is Good To Go<br>";
  echo "The Name Is Good To Go<br>";
  echo "The Country Is Good To Go<br>";
}