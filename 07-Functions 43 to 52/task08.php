<?php

$message = 'Hello';

echo $message;

$$message = &$message;
/*$$message == $Hello*/
// Write Your Code Here
$message = function ($message) {
    $$message/*$Hello*/ = $message/*Hello*/;
    return " $message"/*Hello*/;
};
echo $Hello('Osama'); // Hello Osama