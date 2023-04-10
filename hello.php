<?php
//hello.php file

function greet() {
    $message = "Hello";
    $message .= " World!";
    $message .= " Today is ";
    $message .= date("m d Y");
    return $message;
}

echo greet();

?>
