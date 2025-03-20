<?php
//setcookie(name,value,expire,path,domain,secure,httponly);

//$cookie_name = "user";
//$cookie_value = "admin";
//$cookie_expire = time()+60*60*24*30;

///////////////

// $cookie_name = "user";
// $cookie_value = "admin";
// setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
// if(!isset($_COOKIE[$cookie_name])){
//     echo "Cookie named '" . $cookie_name . "' is not set!";
// }else{
//     echo "Cookie '" . $cookie_name . "' is set!";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }


////////////////

// $cookie_name = "user";
// $cookie_value = "admin";
// setcookie($cookie_name, $cookie_value, time() + (3600), "/");
// setcookie("user", "",time()-3600,"/");
// echo "Cookkie 'user' has been deleted.<br>";
// setcookie("user", "john",time()+3600,"/");
// setcookie("email", "john@abc.com",time()+3600,"/");
// if(!isset($_COOKIE[$cookie_name])){
//     echo "Cookie named '" . $cookie_name . "' is not set!";
// }else{
//     echo "Cookie '" . $cookie_name . "' is set!";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }

/////////////////

setcookie("user", "john",time()+3600,"/");
setcookie("email", "john@abc.com",time()+3600,"/");
setcookie("registration", "12311750",time()+3600,"/");
setcookie("mobile", "9988776655",time()+3600,"/");

echo "multiple cookie have been set!";

if(isset($_COOKIE["user"]) && isset($_COOKIE["email"])){
    echo "User: ". $_COOKIE["user"] . "<br>";
    echo "Email: ". $_COOKIE["email"] . "<br>";
    echo "Registration: ". $_COOKIE["registration"] . "<br>";
    echo "Mobile: ". $_COOKIE["mobile"] . "<br>";
}else{
    echo "Cookie not set!";
}

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
setcookie("Student","LPU",time()+300,"/","",true,true);


?>