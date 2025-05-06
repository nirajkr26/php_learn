<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="5.php" method="post">
        <label>Username</label>
        <input type="text" name="username"><br> 
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php
//isset()-> returns true if a variable is declared and not null

//empty()->returns true is a variable is not declared,false,null,""
if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(empty($username)){
        echo "Fill username";
    }elseif(empty($password)){
        echo "Password is missing";
    }else{
        echo "Welcome $username";
    }
}
?>