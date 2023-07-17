<?php

$day = "Sat";

if($day=="Sat" || $day=="Sun" || $day=="Mon") {
  
    echo "We Are Open All The Day";
}elseif($day=="Tue" || $day == "Wed"){
    echo "We Are Open From 08:12";
}elseif($day=="Thu" || $day == "Fri"){
    echo "We Are Closed";
}else{    
    echo "Unknown Day";
}