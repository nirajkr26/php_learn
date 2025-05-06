<?php
// Initialize variables
$name = $email = $password = $phone = "";
$nameErr = $emailErr = $passwordErr = $phoneErr = $termsErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and spaces are allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = htmlspecialchars($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters long";
        }
    }

    // Validate phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = htmlspecialchars($_POST["phone"]);
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Phone number must be 10 digits";
        }
    }

    // Validate terms and conditions
    if (empty($_POST["terms"])) {
        $termsErr = "You must accept the terms and conditions";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h2>Form Validation Example</h2>
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color: red;">* <?php echo $nameErr; ?></span>
        <br><br>

        Email: <input type="email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;">* <?php echo $emailErr; ?></span>
        <br><br>

        Password: <input type="password" name="password" value="<?php echo $password; ?>">
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

    <?php
    // Display success message if no errors
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($phoneErr) && empty($termsErr)) {
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Phone: $phone<br>";
    }
    ?>
</body>
</html>