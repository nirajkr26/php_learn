<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    echo "Fav color: ".$_SESSION["favcolor"]."<br>";    
    echo "Fav animal: ".$_SESSION["favanimal"]."<br>";
    echo "Nickname: ".$_SESSION["nickname"]."<br>";
    echo "Branch: ".$_SESSION["branch"]."<br>";
    ?>
    
    
</body>
</html>