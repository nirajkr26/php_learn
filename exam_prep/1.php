<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
$user=$_POST["username"];
$pass=$_POST["password"];
echo "{$user} - {$pass}";
?>