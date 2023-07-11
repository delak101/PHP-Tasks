<?php
echo 'You Can Find The Tasks  <a href="https://elzero.org/php-bootcamp-assignments-lesson-from-6-to-12/"> Here </a>';


echo "<h4>-----TASK 1-----</h4>";

echo "<br>";

echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50       
echo "<br>";
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer



echo "<h4>-----TASK 2-----</h4>";

// 100

// Method One
echo gettype(100);
echo "<br>";

// Method Two
echo get_debug_type(100);

// Method Three => Optional


echo "<h4>-----TASK 3-----</h4>";

echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo "<br>";

echo "<h4>-----TASK 4-----</h4>";

echo nl2br("We \n Love \n Elzero \n Web \n School");
echo "<br>";



echo "<h4>-----TASK 5-----</h4>";


echo nl2br(<<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now);



echo "<h4>-----TASK 6-----</h4>";

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
//Hello \PHP\ We Love Programming


echo "<h4>-----TASK 7-----</h4>";

echo (int)"1Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");

// Needed Output
//1
//integer


echo "<h4>-----TASK 8-----</h4>";


echo "<pre>";
print_r([
  "FrontEnd"=>[
    "html",
    "css"],
  "JS"=>[
     "vuejs"=>[
      2=> "v2",
      3=> "v3"],
    0=> "Reactjs",
    1=> "Svelte"],
  "backend"=>[
    0=> "php" ,
    1=> "mysql",
    2=> "Security"],
  0=> "git",
  1=> "github",
  "testing"=>[
    0=> "Unit Testing",
    1=> "End To End",
    2=> "Integration"],
]);
echo "</pre>";
?>
