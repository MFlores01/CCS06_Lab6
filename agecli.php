<?php
//hello.php file
$name = $argv[1];
$birthyear = $argv[2];

$age = date("Y") - $birthyear;

$voter = $age >= 18 ? "You are a voter" : "";
$senior = $age >= 60 ? "You are a Senior Citizen" : "";

echo "Your name is $name, and your age is $age years old\n";
echo $voter . "\n";
echo $senior . "\n";
?>