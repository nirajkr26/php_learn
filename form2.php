<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['sport'])){
            $sports = $_POST['sport'];
            echo "You like: <br>";
            echo "<ol>";
            foreach ($_POST['sport'] as $sports) {
                echo "<li>". htmlspecialchars(($sports)) . "</li>";
            }
            echo "</ol>";
        } else {
            echo "Please select a sport";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form</title>
</head>
<body>
    <h2>Simple Php form</h2>
    <form action="" method="POST">
        <input type="checkbox" id="s1" name="sport[]" value="Cricket">
        <label for="s1">I like Cricket</label><br>
        <input type="checkbox" id="s2" name="sport[]" value="Football">
        <label for="s2">I like Football</label><br>
        <input type="checkbox" id="s3" name="sport[]" value="Basketball">
        <label for="s3">I like Basketball</label><br>
        <input type="checkbox" id="s4" name="sport[]" value="Volleyball">
        <label for="s4">I like Volleyball</label><br>
        <input type="checkbox" id="s5" name="sport[]" value="Tennis">
        <label for="s5">I like Tennis</label><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>