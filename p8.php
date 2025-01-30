<?php
$a=2404;

if($a%4==0 ){
    echo "Leap year";
}else{
    echo "not leap year";
}
echo "\n";
$i=1;
do{
    echo "the value of i is {$i}\n";
    $i++;
}while($i<=10);

echo "\n";

$colors=array("Red","Green","Blue");

foreach($colors as $value){
    echo "the color is $value\n";
}



?>