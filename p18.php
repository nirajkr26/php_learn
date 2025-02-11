<?php
function addInt(...$number){
    $sum=0;
    foreach($number as $num){
        $sum+=$num;
    }
    return $sum;
}
function addStr(...$number){
    $sum="";
    foreach($number as $num){
        $sum.=$num;
    }
    return $sum;
}
echo "result ".addInt(1,3,5,7,9);
echo "\nresult ".addStr("niraj","kumar");

?>