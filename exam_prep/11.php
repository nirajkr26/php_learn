<?php

$password="pizza123";
$hash=password_hash($password,PASSWORD_DEFAULT);

echo $hash."<br>";

if(password_verify($password,$hash)){
    echo "same";
}else{
    echo "different";
}

?>