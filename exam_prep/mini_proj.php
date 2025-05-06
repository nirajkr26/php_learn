<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to fakebook</h2>
        Username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password" ><br>
        <input type="submit" value="Register" name="submit"><br><br>
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
        echo "Please enter a username";
    }elseif(empty($password)){
        echo "please enter a password";
    }else{
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="insert into users (user,password) values ('$username','$hash')";

        mysqli_query($conn,$sql);
        echo "Registeration Successful";
    }

}
?>



<?php
mysqli_close($conn);
?>