<?php
$name = $email = $gender = $website = $phone = "";
$nameErr = $emailErr = $genderErr = $websiteErr = $passwordErr = $phoneErr = $termsErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z0-9' ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST['password'])) {
        $passwordErr = "Password is required";
    } elseif (strlen($_POST['password']) < 8) {
        $passwordErr = "Password must be at least 8 characters long";
    } else {
        $password = test_input($_POST['password']);
    }

    if (empty($_POST['phone'])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST['phone']);
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Invalid phone number format";
        }
    }

    if (empty($_POST['terms'])) {
        $termsErr = "You must accept the terms and conditions";
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1~.0">
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

        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span style="color: red;">* <?php echo $phoneErr; ?></span>
        <br><br>

        <input type="checkbox" name="terms" value="accepted" <?php if (isset($_POST['terms'])) echo "checked"; ?>>
        I accept the terms and conditions
        <span style="color: red;">* <?php echo $termsErr; ?></span>
        <br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
