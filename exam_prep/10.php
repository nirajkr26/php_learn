<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username:
        <br><input type="text" name="username"><br>
        <input type="submit"><br>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"])) {
        echo "Hello " . htmlspecialchars($_POST["username"]);
    } else {
        echo "Username is required.";
    }
}
?>