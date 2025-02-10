<?php
function show(){
    echo "Hello world\n";
}
show();
show();

function cse($course,$credit){
    echo "$course is $credit credits\n";
}
cse("php",3);
cse("ai",4);
cse("java",3);

function sum($a,$b){
    echo ($a+$b)."\n";
}
sum(10,20);
sum(10.4,0.5);

function sums($a=0,$b=10){
    echo ($a+$b)."\n";
}
sums(4);
function sumsCast(float $a,float $b){
    echo (int)($a+$b)."\n";
}
sumsCast(4.5,5.5);

// $a=trim(fgets(STDIN));
// $a=readline();
// echo $a."\n";
// var_dump($a);

$a=10;$b=20;
//swap function
function swap(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
swap($a,$b);
echo "a=$a b=$b\n";

function multiply(&$num){
    return $num*=$num;
}
$num=10;
echo multiply($num)."\n";

function addRef(&$num1,&$num2){
    return ($num1+$num2);
}
$num1=10;$num2=20;
echo addRef($num1,$num2)."\n";

$lang="php";
function showLang(){
    global $lang;
    echo $lang."\n";
}
showLang();
echo "the global is $lang\n";

?>









