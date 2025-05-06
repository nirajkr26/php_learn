<?php //creating database from php
// This code creates a database named "test_02" using PHP and MySQLi.
$host="localhost";
$username="root";
$password="";
$conn = new mysqli($host,$username,$password);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "CREATE DATABASE test_02";
if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo "Error creating database: ".$conn->error;
}
$conn->close();
?>