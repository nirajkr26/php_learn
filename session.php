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
     $_SESSION["favcolor"]="green";
     $_SESSION["favanimal"]="cat";
     $_SESSION["nickname"]="krishna";
     $_SESSION["branch"]="CSE";
     echo "Session variables are set!<br>";
     echo "Fav color: ".$_SESSION["favcolor"]."<br>";
    ?>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</body>
</html>