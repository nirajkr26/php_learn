<?php
$books = array(
    "C++" => array("name" => "C++", "author" => "Bjarne Stroustrup", "year" => 1985),
    "php" => array("name" => "php", "author" => "Rasmus Lerdorf", "year" => 1994),
    "java" => array("name" => "java", "author" => "James Gosling", "year" => 1995)
);

$keys = array_keys($books);
for ($i = 0; $i < count($books); $i++) {
    echo "$keys[$i] ";
    foreach ($books[$keys[$i]] as $key => $value) {
        echo $key . " = " . $value . " ";
    }
    echo "\n";
}


