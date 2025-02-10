<?php
// $books = array(
//     "C++" => array("name" => "C++", "author" => "Bjarne Stroustrup", "year" => 1985),
//     "php" => array("name" => "php", "author" => "Rasmus Lerdorf", "year" => 1994),
//     "java" => array("name" => "java", "author" => "James Gosling", "year" => 1995)
// );

// $keys = array_keys($books);
// for ($i = 0; $i < count($books); $i++) {
//     echo "$keys[$i] ";
//     foreach ($books[$keys[$i]] as $key => $value) {
//         echo $key . " = " . $value . " ";
//     }
//     echo "\n";
// }

// Reverse array
$number = [10, 20, 30, 40, 50];
$reversed = array_reverse($number);
foreach ($reversed as $value) {
    echo "$value ";
}
echo "\n";

// Sort array
$fruits = array("mango", "apple", "banana", "cherry");
sort($fruits);
print_r($fruits);

// Add element to array
array_push($fruits, "grapes");
print_r($fruits);

// Check if key exists in array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
if (array_key_exists("Ben", $age)) {
    echo "Ben is present in the array\n";
} else {
    echo "Ben is not present in the array\n";
}

// Unset array element
unset($fruits[0]);
print_r($fruits);

// Create range of elements
$nums = range('A', 'Z');
print_r($nums);

?>






