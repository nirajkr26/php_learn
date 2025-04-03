<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:login.php");
    exit;
}
echo "Welcome ".$_SESSION["user"];
echo "<br>";
echo "<a href='logout.php'>Logout</a>";
?>