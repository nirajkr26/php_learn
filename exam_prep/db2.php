<?php
include("database.php");

$sql="INSERT INTO users (user,password) values ('john','12345')";

mysqli_query($conn,$sql);

mysqli_close($conn);
?>