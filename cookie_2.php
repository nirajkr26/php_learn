<?php

setcookie("user","john",time()+3600,"/");

echo "Cookie 'user' is set!<br>";

if(isset($_COOKIE["user"])){
    echo "User is: ". $_COOKIE["user"]."<br>";
}else{
    echo "Cookie not set!<br>";
    die;
}

//updating cookie

setcookie("user","jennie",time()+30,"/");

echo "Cookie 'user' is updated!<br>";

if(isset($_COOKIE["user"])){
    echo "Updated User is: ". $_COOKIE["user"]."<br>";
}else{
    echo "Cookie not set!<br>";
}

//deleting cookie

setcookie("user","",time()-3600,"/");

echo "Cookie 'user' has been deleted.<br>";

if(isset($_COOKIE["user"])){
    echo "Cookie not set!<br>";
}else{
    echo "Cookie 'user' is deleted!<br>";
}


setcookie("user","jennie",time()+30,"/");
setcookie("email","jennie12@xyz.com",time()+30,"/");
if(isset($_COOKIE["user"]) && isset($_COOKIE["email"])){
    echo "User: ". $_COOKIE["user"] . "<br>";
    echo "Email: ". $_COOKIE["email"] . "<br>";
}else{
    echo "Cookie not set!";
}
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

setcookie("Student","LPU",time()+300,"/","",true,true);


?>