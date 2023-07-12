<?php
echo 'You Can Find The Tasks  <a href="https://elzero.org/php-bootcamp-assignments-lesson-from-30-to-36/"> Here </a>';

echo "<h4>-----TASK 1-----</h4>";

$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
if ($b > $a && $a === $c && $a + $c === $b) {
    echo "Yes";
}   

echo "<h4>-----TASK 2-----</h4>";


// Test Case 1
$a = 100;
$b = 200;
$c = 300;

//echo "A Is Not Larger Than B Or C";
if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo '<br>';

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

//echo "A Is Larger Than B";
if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo '<br>';

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

//echo "A Is Larger Than c";
if ($a > $b){
    echo "A Is Larger Than B";
} elseif ($a > $c){
    echo "A Is Larger Than c";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo '<br>';
?>


<?php 
echo "<h4>-----TASK 3-----</h4>";

$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"
// Needed Output
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    #here we take the username the user enters and save it in $username
    $username = $_POST['user'];

    echo "The Request Method Is Post And Username Is " . $username;
    
    echo "<br>";
    #here we check if username exists in the array above
    if(in_array($username, $admins)==true){
        echo "This Username $username Is Admin";
    }
//    switch ($username) {
//        case "Ahmed":
//        echo "This Username $username Is Admin";
//        break;
//        case "Osama":
//        echo "This Username $username Is Admin";
//        break;
//        case "Sayed":
//        echo "This Username $username Is Admin";
//        break;
//    }
}
?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
 

<?php 
echo "<h4>-----TASK 4-----</h4>";

$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c) ? "A + B = C" : 
     (($a + $c === $b) ? "A + C = B" : 
     (($b + $c === $a) ? "B + C = A" : 
     "The End"));


// Output
// "B + C = A"

echo "<h4>-----TASK 5-----</h4>";



$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
  echo "The Age Is Good To Go<br>";
  echo "The Name Is Good To Go<br>";
  echo "The Country Is Good To Go<br>";
}

echo "<h4>-----TASK 6-----</h4>";


$genre = "Hack And Slash";

switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games";
        break;
        
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;

    case "FPS":
        echo "I Recommend Uncharted Games";
        break;

    case "Platform":
        echo "I Recommend Megaman Games";
        break;

    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;

    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

// Needed Output
//"I Recommend Castlevania Games"

echo "<h4>-----TASK 7-----</h4>";


$num_one = 23;
$num_two = 5;
$op = "+";

switch($op){
    case "+":
        echo $num_one + $num_two;
        break;
    case "-":
        echo $num_one - $num_two;
        break;
    case "/":
        echo $num_one / $num_two;
        break;
    case "*":
        echo $num_one * $num_two;
        break;
    default:
        echo "Unknown Operation";
}

echo "<h4>-----TASK 8-----</h4>";


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

?>