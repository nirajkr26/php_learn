<?php
define("Pi", 3.14);
const x = 10;
function show()
{
    echo "the vlue of Pi is " . Pi . "\n";
    echo "the vlue of x is " . x . "\n";
}
show();

$name = array("A", "B", "C");
print_r($name);

for ($i = 0; $i < count($name); $i++) {
    echo $name[$i] . "\n";
}

$num = array(1, 2, 3, 4, 5);
foreach ($num as $value) {
    echo $value . " ";
}
echo "\n";

$multi = [10, "ram", 3.14];
print_r($multi);
echo "\n";

$i = 0;
while ($i < count($multi)) {
    echo $multi[$i] . " ";
    $i++;
}
echo "\n";

$arr3 = array(array(1, 2, 3), array("one", "two", "three"));
print_r($arr3);

for ($i = 0; $i < count($arr3); $i++) {
    for ($j = 0; $j < count($arr3[$i]); $j++) {
        echo "the value of array at index $i.$j is " . $arr3[$i][$j] . "\n";
    }
    echo "\n";
}

$arr4=array("a"=>10,"b"=>20,"c"=>30);
foreach($arr4 as $key=>$value){
    echo "the value of $key is $value\n";
}
echo "\n";

$branch["CSE"]="Computer science and engineering";
$branch["IT"]="Information technology";
$branch["ECE"]="Electronics and communication engineering";
$branch["CE"]="Civil engineering";
print_r($branch);

echo "\n";

foreach($branch as $key=>$value){
    echo "the branch $key is $value\n";
}

echo "\n";
$result=array(
    array("Manoj",8.5,"pass"),
    array("Jhonny",4.5,"fail"),
    array("Saroj",7.3,"pass"),
);
for ($i = 0; $i < count($result); $i++) {
    for ($j = 0; $j < count($result[$i]); $j++) {
        echo "the value of array at index $i.$j is " . $result[$i][$j] . "\n";
    }
    echo "\n";
}

$books=
array(
    "C++"=>array("name"=>"Beginning with C++","copies"=>10),
    "Php"=>array("name"=>"Basics of PHP","copies"=>8),
    "Laravel"=>array("name"=>"MVC","copies"=>3),
);

foreach($books as $key=>$value){
    echo "the book $key is ".$value["name"]." and the copies are ".$value["copies"]."\n";
}
?>