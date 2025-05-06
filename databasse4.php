<?php
$servername= 'localhost';
$username = 'root';
$password = '';
$dbname='stud11';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";

$sql = "CREATE TABLE IF NOT EXISTS student(
    studid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    studname VARCHAR(30) NOT NULL,
    age VARCHAR(30) NOT NULL,
    marks INT(6) NOT NULL
    )";
?>