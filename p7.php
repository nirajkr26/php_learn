<?php
$a=12;
$b=13;
echo "The value of + : ".($a+$b)."\n";
echo "The value of - : ".($a-$b)."\n";
echo "The value of * : ".($a*$b)."\n";
echo "The value of / : ".($a/$b)."\n";
echo "The value of % : ".($a%$b)."\n\n";

echo "The value of 1 : ".($a==$b)."\n";
echo "The value of 2 : ".($a===$b)."\n";
echo "The value of 3 : ".($a!=$b)."\n";
echo "The value of 4 : ".($a!==$b)."\n";
echo "The value of 5 : ".($a>$b)."\n";
echo "The value of 6 : ".($a>=$b)."\n";
echo "The value of 7 : ".($a<$b)."\n";
echo "The value of 8 : ".($a<=$b)."\n";

var_dump($a===$b);

$c="hello";
$d="world";
echo "The value of 1 : ".($c.$d)."\n";
echo "The value of 1 : ".($c.=$d)."\n";

$x=$b>$a?$b:$a;
$y=$b>$a?$b:$a;
echo "The value of ternary : ".($x)."\n";
$user="niraj";
echo $status = (empty($user))?"null":$user;

echo "\n";
echo $status=$user?? "anonymous";


