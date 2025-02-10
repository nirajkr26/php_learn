<?php
function fact($num){
    if($num ==1 || $num==0) return 1;
    return $num * fact($num-1);
}
echo fact(3);

$fiboSize=readline("Enter range of fino series: ");
function fibo($range){
    $a=0;$b=1;
    for($i=0;$i<$range;$i++){
        echo "$a ";
        $temp=$a+$b;
        $a=$b;
        $b=$temp;
         
    }
}
fibo($fiboSize);
echo "\n";

function fiboS($n) {
    if ($n <= 1) {
        return $n;
    }
    return fiboS($n - 1) + fiboS($n - 2);
}

function printFiboSeries($range) {
    for ($i = 0; $i < $range; $i++) {
        echo fiboS($i) . " ";
    }
    echo "\n";
}

printFiboSeries($fiboSize);


