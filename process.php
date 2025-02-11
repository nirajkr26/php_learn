<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $pass = htmlspecialchars($_GET["pass"]);

    echo "<h2>Form submitted successfully <h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Password: $pass <br>";
}else{
    echo "Invalid request";
}

?>