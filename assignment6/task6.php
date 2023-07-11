<?php
echo 'You Can Find The Tasks  <a href="https://elzero.org/php-bootcamp-assignments-lesson-from-37-to-42/"> Here </a>';

echo "<h4>-----TASK 1-----</h4>";
$index = 10;

while($index!=0){
    echo $index . "<br>";
    $index -= 1;
}
/* Needed Output
10
9
8
7
6
5
4
3
2
1*/



echo '<br>';
echo "<h4>-----TASK 2-----</h4>";

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



echo "<h4><br>-----TASK 3-----</h4>";

$num = 2;
while ($num < 520) {
  // Your Code Here
  if($num == 2){
    $num -= 1;
  }
  echo $num . "<br>";
  $num = 2*$num + 2;
}

/* Needed Output
1
4
10
22
46
94
190
382*/


echo "<h4><br>-----TASK 4-----</h4>";

$start = 10;
$end = 0;
$stop = 3;
$temp = $start;


for(;$start>=$stop;){
    if($start == $temp){
        echo $start."<br>";
    }else{
        echo $end.$start."<br>";
    }
    $start--;
}
/* Needed Output
10
09
08
07
06
05
04
03*/

echo "<h4><br>-----TASK 5-----</h4>";

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i=0;$i<7;$i++){
    if($mix[$i]!=1 && is_numeric($mix[$i])){
        echo $mix[$i]."<br>";
    }else{
        continue;
    }
}
/* Output
2
3
4
*/

echo "<h4><br>-----TASK 6-----</h4>";

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $money=>$needed){
    echo"The Name Is $money And I Need $needed Pound From Him"."<br>";
}
/* Output
"The Name Is Ahmed And I Need 100 Pound From Him"
"The Name Is Sayed And I Need 150 Pound From Him"
"The Name Is Osama And I Need 100 Pound From Him"
"The Name Is Maher And I Need 250 Pound From Him"
*/

echo "<h4><br>-----TASK 7-----</h4>";

$mix = [1, 2, "A", "B", "C", 3, 4];
$num_of_items = count($mix);
$Letters=0;
$Numbers=0;

for($i=0;$i<$num_of_items;$i++){
    if(is_numeric($mix[$i])){
        echo $mix[$i]."<br>";
        $Numbers++;
    }else{
        $Letters++;
    }
}
echo "$Numbers Numbers Printed<br>";
echo "$Letters Letters Ignored<br>";

/* Output
1
2
3
4
"4 Numbers Printed"
"3 Letters Ignored"*/

echo "<h4><br>-----TASK 8-----</h4>";
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $number){
    if($number % 2 == 0){
        echo $number / 2 ."<br>";
    }
    else{
        continue;
    }
}
/* Output
6
10
15*/

echo "<h4><br>-----TASK 9-----</h4>";

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i=0;$i<count($names);$i++){
    if($names[$i]== $names[$nums[$help_num]]){
        echo $names[$nums[$help_num]]."<br>";
        echo $names[$nums[$help_num] + $nums[$help_num]]."<br>";
    }
} //loop until you get to the right order
/* Output
"Sayed"
"Osama"*/

echo "<h4><br>-----TASK 10-----</h4>";

$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach($nums as $key => $num){
    echo $nums[$key] . " + " . $nums[$help_num-$key] . " = " . $nums[$key]+$nums[$help_num-$key] . "<br>";
}
/* Output
"2 + 10 = 12"
"4 + 6 = 10"
"5 + 5 = 10"
"6 + 4 = 10"
"10 + 2 = 12"
*/
?>