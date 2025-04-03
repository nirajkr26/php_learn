<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(($username=="admin" && $password=="admin") || ($username=="user" && $password=="user123")){
        $_SESSION["user"]=$username;
        header("location:dashboard.php");
        exit;
    }else{
        echo "Invalid username and password";
    }
}

?>

<form  method="post">
    username:<input type="text" name="username" required><br>
    password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>