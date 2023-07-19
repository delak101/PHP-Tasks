<?php

/*Needed Output
2
4
6
8
10
12
14
16
18
20*/

//while
echo "using while loop:<br>";
$index = 0;
while($index!=20){
    $index += 2;
    echo $index . "<br>";
}

echo '<br>';

//do-while
echo "using do-while loop:<br>";
$index = 0;
do{
    $index += 2;
    echo $index . "<br>";
}while($index!=20);


echo '<br>';

//for
echo "using for loop:<br>";

$index = 0;
for(;$index<20;){
    $index += 2;
    echo $index . "<br>";
}