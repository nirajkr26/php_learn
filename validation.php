<?php
$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "Please enter your name";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $emailErr = "Please enter your email";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }
    if (empty($_POST['password'])) {
        $passwordErr = "Please enter your password";
    } else {
        $password = htmlspecialchars($_POST['password']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
        Name: <input type="text" name="name" value="<?php echo $name; ?>" >
        <span style="color: red;">* <?php echo $nameErr; ?></span>
        <br><br>
        
        Email: <input type="email" name="email" value="<?php echo $email; ?>" >
        <span style="color: red;">* <?php echo $emailErr; ?></span>
        <br><br>
        
        Password: <input type="password" name="password" value="<?php echo $password; ?>" >
        <span style="color: red;">* <?php echo $passwordErr; ?></span>
        <br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
