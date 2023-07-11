<?php
echo "<h4>-----TASK 1-----</h4>";

$name = "Elzero Courses";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $name ?></title>
  </head>
  <body>
    <h1><?php echo $name ?></h1>
    <p>Here In <?php echo $name ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name ?></footer>
  </body>
</html>


<?php 
echo "<h4>-----TASK 2-----</h4>";

$name = "elzero";
$$name = "Web";

echo "Web";
echo "<br>";
echo $elzero;
echo "<br>";
echo $$name;
echo "<br>";



echo "<h4>-----TASK 3-----</h4>";


$a = 200;
$b = $a;
$a = 100;

echo $b; // 200  here b = the value that was in a "200" 

echo "<br>";

$b = &$a;     
echo $b; //100   here b = the value that is in the store a is pointing to

echo "<h4>-----TASK 4-----</h4>";


echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SystemRoot'];
echo "<br>";
echo $_SERVER['OPENSSL_CONF'];
/*
echo "<br>";
echo "<pre>";
echo print_r($_SERVER);
echo "</pre>";
*/

echo "<h4>-----TASK 5-----</h4>";

/*
pre-defined vars

Superglobals — Built-in variables that are always available in all scopes
$GLOBALS — References all variables available in global scope
$_SERVER — Server and execution environment information
$_GET — HTTP GET variables
$_POST — HTTP POST variables
$_FILES — HTTP File Upload variables
$_REQUEST — HTTP Request variables
$_SESSION — Session variables
$_ENV — Environment variables
$_COOKIE — HTTP Cookies
$php_errormsg — The previous error message
$http_response_header — HTTP response headers
$argc — The number of arguments passed to script
$argv — Array of arguments passed to script

pre-defined consts

__LINE__        The current line number of the file.

__FILE__        The full path and filename of the file with symlinks resolved. 
                If used inside an include, the name of the included file is returned.

__DIR__         The directory of the file. If used inside an include, the directory of the included file is returned. 
                This is equivalent to dirname(__FILE__). 
                This directory name does not have a trailing slash unless it is the root directory.

__FUNCTION__    The function name, or {closure} for anonymous functions.

__CLASS__       The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar).
                When used in a trait method, __CLASS__ is the name of the class the trait is used in.

__TRAIT__       The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).

__METHOD__      The class method name.

__NAMESPACE__   The name of the current namespace.

*/

echo "<h4>-----TASK 6-----</h4>";

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;

?>