<?php
//associative array= an array made of key=> value pairs

$capitals=array("India"=>"Delhi","USA"=>"Washington","Japan"=>"Tokyo");

$capitals["China"]="Beijing";
echo $capitals["Japan"]."<br>";

foreach($capitals as $key=>$value){
    echo "$key->$value <br>";
}
$keysArray=array_keys($capitals);
?>