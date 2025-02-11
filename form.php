<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form example</title>
</head>
<body>
    <h2>Simple Php form</h2>
    <form action="process.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>