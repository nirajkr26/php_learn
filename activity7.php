<?php
if (isset($_POST['set_cookie'])) {
    $username = $_POST['username'];
    setcookie("user", $username, time() + 3600, "/");
    header("Location: cookies.php");
    exit();
}

if (isset($_POST['delete_cookie'])) {
    setcookie("user", "", time() - 3600, "/");
    header("Location: cookies.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Greeting with Cookies</title>
</head>
<body>

<h2>Personalized Greeting System</h2>

<?php
if (isset($_COOKIE["user"])) {
    echo "<p>Welcome back, <strong>" . htmlspecialchars($_COOKIE["user"]) . "</strong>!</p>";
    echo '<form method="post">
            <button type="submit" name="delete_cookie">Delete Cookie</button>
          </form>';
} else {
    echo "<p>Hello, guest! Enter your name to personalize your experience.</p>";
}
?>

<form method="post">
    <label for="username">Enter Your Name:</label>
    <input type="text" id="username" name="username" required>
    <button type="submit" name="set_cookie">Set Cookie</button>
</form>

</body>
</html>
