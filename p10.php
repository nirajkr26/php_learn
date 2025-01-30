<?php
$d=date("d/m/Y-D"); //date method
echo $d;

echo "\nEnter a number: ";
$e= trim(fgets(STDIN)); // user input
echo $e;

echo "\nEnter name: ";
$f= trim(fgets(STDIN)); // user input

echo "\nEnter age: ";
$g= trim(fgets(STDIN)); // user input
echo "Name is $f having age $g";



?>