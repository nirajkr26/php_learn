<?php

$elements = array("apple","ball","cat");

array_push($elements,"dog","eye");
array_push($elements,"fish");
array_pop($elements); //removes last element
array_shift($elements);//removes first element

foreach($elements as $element){
    echo "$element <br>";
}
$rev_elements=array_reverse($elements);//reverses the array but needs to be assigned to new array

echo count($elements);


?>